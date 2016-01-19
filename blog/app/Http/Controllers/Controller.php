<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
use EndaEditor;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // public function index(){
    // 	return view('resume.index');
    // }

    public function store(Request $request, $id=0){
      date_default_timezone_set('Asia/Shanghai');
      $file = $request->file('myfile');
		if($file->isValid()){
    		//检验一下上传的文件是否有效.
    		$clientName = $file -> getClientOriginalName();
    		$tmpName = $file ->getFileName(); // 缓存在tmp文件夹中的文件名 例如 php8933.tmp 这种类型的.
   			$realPath = $file -> getRealPath();    //这个表示的是缓存在tmp文件夹下的文件的绝对路径
   			//例如我的是: G:\xampp\tmp\php5A69.tmp
			//这里要注意,如果我使用接下来的move方法之后, getRealPath() 就找不到文件的路径了.因为文件已经被移走了.
    		$extension = $file -> getClientOriginalExtension(); //上传文件的后缀.
    		$mimeTye = $file -> getMimeType();//大家对mimeType应该不陌生了. 我得到的结果是 image/jpeg.
   			//这里要注意一点,以前我们使用 mime_content_type() ,在php5.3 之后,开始使用 fileinfo 来获取文件的mime类型.所以要加入 php_fileinfo的php拓展.windows下是 php_fileinfo.dll,在php.ini文件中将 extension=php_fileinfo.dll前面的分号去掉即可.当然要重启服务器.
          $path = $file -> move('storage', date("Y-m-d").time().".$extension");
	  if ($id!=0) {
		$res=DB::update('update homework set filePath = \''.$path.'\' where homeworkId = ?', [$id]);
		}
        //return redirect('index.php/welcome');
		return 'success';
    	}
    	return "failed";
    }

    public function getBlog($type = 'all', $current = 1){

      if ($type == 'all')
      {
        $total = DB::table('essay')
                ->count();
        $blog = DB::select('select * from essay order by(date) desc LIMIT ?, ?', [($current-1)*4, 4]);
      }
      else
      {
        $total = DB::table('essay')
                ->join('label', 'essay.id', '=', 'label.essay_id')
                ->where ('label.label', '=', $type)
                ->count();
        $blog = DB::table('essay')
                ->join('label', 'essay.id', '=', 'label.essay_id')
                ->where ('label.label', '=', $type)
                ->orderBy('date', 'desc')
                ->skip(($current-1)*4)
                ->take(4)
                ->get();
      }
      foreach ($blog as $point){
        if (strlen($point->content) > 256)
          $point->content = substr($point->content, 0, 256).'......'; 
      }
      $visitorInfo = DB::select('select count(*) as total from visitor');
      $label = DB::select('select distinct label from label');
      return view('resume.blogindex')->with('blog', $blog)->with('total', $total)->with('current', $current)->with('type', $type)->with('label', $label)->with('visit', $visitorInfo[0]);
    }

    public function showAll($title = NULL){

      if ($title != NULL)
      {
        $blog = DB::select('select * from essay where title = ?', [$title]);
        $label = DB::select('select * from label where essay_id = ?', [$blog[0]->id]);
      }
      else
        return view('errors.503');
        return view('resume.showblog')->with('blog', $blog[0])->with('label', $label);
    }

    public function writeBlog(Request $request){
      date_default_timezone_set('Asia/Shanghai');
      $title = $request->input('title', '');
      $label = $request->input('type', '');
      $content = $request->input('content', '');
      $pretitle = $request->input('pretitle', '');
      $privacy = $request->input('privacy');
      if ($content != '' && $title != '')
      {
        if ($pretitle != '')
        {
          $essay_id = DB::select ('select id from essay where title = ?', [$pretitle]);
          DB::delete('delete from essay where title = ?', [$pretitle]);
          DB::delete('delete from label where essay_id = ?', [$essay_id[0]->id]);
        }
        DB::table('essay')->insert(['title' => $title, 'author' => 'sunji', 'date' => date('Y-m-d H:m:s'), 'content' => EndaEditor::MarkDecode($content), 'previledge' => $privacy]);
        $essay_id = DB::select ('select id from essay where title = ?', [$title]);
        if ($label != "")
        {
          $retArr = explode(',', $label);
          foreach ($retArr as $a){
            if ($a == '') continue;
            DB::table('label')->insert(['label' => $a, 'essay_id' => $essay_id[0]->id]);
          }
        }
	
      }
      else
        echo "NULL CONTENT";
      return redirect('/blog/newlist');
    }

    public function upload(){
        $data = EndaEditor::uploadImgFile('storage');
        return json_encode($data);
    }

    public function delete($title, Request $request){
      $essay_id = DB::select ('select id from essay where title = ?', [$title]);
      DB::delete('delete from essay where title = ?', [$title]);
      DB::delete('delete from label where essay_id = ?', [$essay_id[0]->id]);
      return redirect('/blog/newlist');
    }

    public function rewrite($title){
      $blog = DB::select('select * from essay where title = ?', [$title]);
      $label = DB::select('select * from label where essay_id = ?', [$blog[0]->id]);
      return view('resume.rewrite')->with('blog', $blog[0])->with('label', $label);
    }

    public function deletelabel($type){
      DB::delete('delete from label where label = ? ', [$type]);
      return redirect('/blog/newlist');
    }

    public function visitor($type = 'all', $current = 1){

      if ($type == 'all')
      {
        $total = DB::table('essay')
		->where ('previledge', '<>', 0)
                ->count();
        $blog = DB::select('select * from essay where previledge <> 0 order by(date) desc LIMIT ?, ?', [($current-1)*4, 4]);
      }
      else
      {
        $total = DB::table('essay')
                ->join('label', 'essay.id', '=', 'label.essay_id')
                ->where ('label.label', '=', $type)
		->where ('essay.previledge', '<>', 0)
                ->count();
        $blog = DB::table('essay')
                ->join('label', 'essay.id', '=', 'label.essay_id')
                ->where ('label.label', '=', $type)
		->where ('essay.previledge', '<>', 0)
                ->orderBy('date', 'desc')
                ->skip(($current-1)*4)
                ->take(4)
                ->get();
      }
      foreach ($blog as $point){
        if (strlen($point->content) > 256)
          $point->content = substr($point->content, 0, 256).'......'; 
      }
      $visitorInfo = DB::select('select count(*) as total from visitor');
      $label = DB::select('select distinct label from label');
      return view('resume.front')->with('blog', $blog)->with('total', $total)->with('current', $current)->with('type', $type)->with('label', $label)->with('visit', $visitorInfo[0]);
    }

    public function visitShowAll($title = NULL){
      if ($title != NULL)
      {
        $blog = DB::select('select * from essay where title = ?', [$title]);
        $label = DB::select('select * from label where essay_id = ?', [$blog[0]->id]);
      }
      else
        return view('errors.503');
      return view('resume.visitshowblog')->with('blog', $blog[0])->with('label', $label);
    }
    public function homework() {
	return view('homework.homework');
	}
    
}

