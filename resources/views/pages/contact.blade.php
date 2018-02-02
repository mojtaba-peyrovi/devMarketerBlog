@extends('main')

@section('content')
      <div class="row">
        <div class="col-md-12">
          <h1>Contact Me</h1>
          <hr>
          <form>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="subject">Subject:</label>
              <input type="text" name="subject" class="form-control" id="subject">
            </div>
            <div class="form-group">
              <label for="message">Message:</label>
              <textarea type="text" name="message" class="form-control" id="message">Type your message here...</textarea>
            </div>
            <input type="submit" name="" value="Send Message" class="btn btn-success">
          </form>
        </div>
      </div>

@endsection
