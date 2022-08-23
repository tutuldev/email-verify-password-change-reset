


  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form action="{{route('updated.password')}}" method="POST">
                    @csrf
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Old Password</label>
                          <input type="text" class="form-control" id="old_password" name="old_password" placeholder="old_password">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">New Password</label>
                          <input type="text" class="form-control" id="old_password" name="new_password" placeholder="new_password">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                          <input type="text" class="form-control" id="old_password" name="confirm_password" placeholder="confirm_password">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

