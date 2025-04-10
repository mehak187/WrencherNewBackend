<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>New password</title>
</head>

<body>
    @if (session('error'))
        <script>
            swal("{{ session('error') }}", "", "error");
        </script>
    @endif
    <section>
        <div class="loginmain d-flex align-items-center justify-content-center">
            <div class="w-100 d-flex align-items-center justify-content-center">
                <div class="formdiv px-4 py-4 h-100 overflow-auto">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class=" d-flex justify-content-center">
                            <img src="{{ asset('img/logo-main.png') }}" alt="logo" class="img-fluid log-logo">
                        </div>
                    </div>
                    <form action="{{ route('ChangePassword') }}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{$token}}">
                        <p class="fs-5 font-md mt-xl-4">Enter new password</p>

                        <div class="mt-4">
                            <label for="password" class="w-100 font-md mb-1">Password</label>
                            <input type="password" id="password" name="new_password" class="form-control shadow-none focus-none rounded-3"
                                placeholder="Enter the Password" required>
                            @error('new_password')
                                <span class="text-danger">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <label for="password" class="w-100 font-md mb-1">Confirm Password</label>
                            <input type="password" id="password" name="confirm_password" class="form-control shadow-none focus-none rounded-3"
                                placeholder="Confirm Password" required>
                            @error('confirm_password')
                                <span class="text-danger">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <button type="submit"
                                class="text-white rounded-3 bg-sky border-0 w-100 px-2 py-2">Reset</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    @include('Templates.Jslinks')
</body>

</html>