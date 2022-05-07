@csrf
<div class="md-form mt-3 mb-3">
    <label for="">番組タイトル</label>
    <input name="radio_title" class="form-control" required value="{{$article->radio_title ?? old('title')}}">
</div>
<div class="form-group mt-3">
    <label for="">放送日</label>
    <input type="date" name="radio_date" required class="form-control" placeholder="放送日" value="{{$article->radio_date ?? old('date')}}">
</div>
<div class="form-group">
    <label for=""></label>
    <textarea name="body" rows="16" required class="form-control" placeholder="本文"> {{$article->body ?? old('body')}}</textarea>
</div>