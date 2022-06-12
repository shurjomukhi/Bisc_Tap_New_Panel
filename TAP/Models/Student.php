<?php

namespace App\Modules\STUDENT\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Student extends Model
{
   
    public static function get_exam_control()
    {
        return DB::table('exam_control')

            ->join('class_info', 'class_info.id', '=', 'exam_control.class_id')

            ->join('section', 'section.id', '=', 'exam_control.section_id')

            ->join('exam_term', 'exam_term.id', '=', 'exam_control.exam_term_id')

            ->join('student_class',function($join){
                
                $join->on('student_class.classId','=','exam_control.class_id');

                $join->on('student_class.sectionId','=','exam_control.section_id');
            })

            ->select('exam_control.id',
                DB::raw('CONCAT('.DB::getTablePrefix().'class_info.className," -> ",'.DB::getTablePrefix().'section.sectionName," -> ",'.DB::getTablePrefix().'exam_term.examTerm," -> ",'.DB::getTablePrefix().'exam_control.academic_year) as exam_name'))

            ->where('student_class.stdId',Auth::user()->user_track_id)
            
            ->where('exam_control.published',1)
            
            ->get()

            ->pluck('exam_name','id')

            ->prepend('Select Exam Control','');
    }


    public static function get_mark_sheet()
    {

        $result = DB::table('exam_control');

        $result->select('result_generation.*','class_info.className','section.sectionName', 'class_info.result_detail_flag');

        $result->join('class_info','exam_control.class_id','=', 'class_info.id');
        
        $result->join('section','exam_control.section_id','=', 'section.id');

        $result->join('result_generation', 'result_generation.exam_control_id', '=', 'exam_control.id');

        $result->where('result_generation.student_id',Auth::user()->user_track_id);

        $result->where('exam_control.published',1);

        return $result->paginate(20);
    }

    public static function get_student_invoice($student_class)
    {
       
        
        $query =  DB::table('tuition_fees_invoice');

        $query->select(
            
            'tuition_fees_invoice.*',
            
            DB::raw('sum(bisc_tbl_tuition_fee_invoice_detail.total_amount) as total_amount'),
            
            DB::raw('sum(bisc_tbl_tuition_fee_invoice_detail.waived_amount) as waived_amount'),
            
            DB::raw('sum(bisc_tbl_tuition_fee_invoice_detail.paid_amount) as paid_amount'),
            
            'student_information.firstName',
            
            'student_information.lastName',
            'class_info.className',
            'section.sectionName');
        
        $query->join('student_class','student_class.id','=','tuition_fees_invoice.student_class_id');
        
        $query->join('class_info','class_info.id','=','student_class.classId');
        
        $query->join('section','section.id','=','student_class.sectionId');
        
        $query->join('student_information','student_information.id','=','student_class.stdId');
        
        $query->join('tuition_fee_invoice_detail','tuition_fee_invoice_detail.invoice_id','=','tuition_fees_invoice.id');
        
        $query->whereIn('tuition_fees_invoice.student_class_id',$student_class);
        /*
        if (isset($invoice_id)) 
        {
            $query->where('tuition_fees_invoice.invoice_long_id',$invoice_id);
            
            $query->orWhere('tuition_fees_invoice.id',$invoice_id);
        }*/
        $query->where('tuition_fees_invoice.published',1);

        $query->groupBy('tuition_fees_invoice.id');
        
        $query->orderBy('tuition_fees_invoice.academic_year','desc');
        
        $query->orderBy(DB::raw("FIELD(".DB::getTablePrefix()."tuition_fees_invoice.academic_month,'december','november','october','september','august','july','june','may','april','march','february','january')"));
        
        return $query->paginate(50);
    }
}
