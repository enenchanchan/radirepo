@csrf
<div class="md-form">
    <label for="">番組タイトル</label>
    <input name="radio_title" class="form-control" required value="{{old('title')}}">
</div>
<div class="form-group mt-3">
    <label for="">放送日</label>
    <input type="date" name="radio_date" required class="form-control" placeholder="放送日">
</div>
<div class="form-group">
    <label for=""></label>
    <textarea name="body" rows="16" required class="form-control" placeholder="本文"> {{old('body')}}</textarea>
</div>