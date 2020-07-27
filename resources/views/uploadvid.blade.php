@extends('layouts.app')
<style>
    button{
  border-radius: 20px;
  border: 1px solid #009345;
  background-color: #009345;
  color: #fff;
  font-size: 1rem;
  font-weight: bold;
  padding: 10px 40px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform .1s ease-in-out;

  &:active{
    transform: scale(.9);
  }

  &:focus{
    outline: none;
  }
}
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as  Admin!') }}
                </div>


                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <form method="post" action="/upload" enctype="multipart/form-data">
                 @csrf
                 <label for="">Title</label>
                 <input type="text" class="form-control" name="video_title" id="" placeholder="Input Topic">
                 
                 <select name="class_levels" id="">
                 <option >Select class</option>
                 <option value="jamb_vid"> JAMB Option</option>
                 <option value="waec_vid"> WAEC Option</option>
                 <option value="postutme_vid"> Post UTME Option</option>
                 <option value="sat_vid"> SAT Option</option>
                 <option value="ielts_vid"> IELTS Option</option>

                 </select>

                 <input type="file" name="tutorial_videos" id="file">
                 <button class="rounded-pill" name="class_subject" type="submit">Upload Tutorial Videos</button>
                </form>
                
                <p></p>
                 
                 
    </div>
</div>
@endsection
