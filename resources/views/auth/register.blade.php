
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fahagola</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/dashboard/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/dashboard/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/dashboard/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/dashboard/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller" id="app">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth bg-light">
                    <div class="card col-lg-4 mx-auto" style="background-color:rgba(17, 141, 208, 0.837) ">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Abonnement</h3>
                            <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                                
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">                                <div class="form-group">
                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="email" class="form-control p_input @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" >
                                </div>
                                @error('email')
                                    <span class="invalid-feedback text-white mb-3 d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                <div class="form-group">
                                    <label>Nom et prénoms *</label>
                                    <input type="text" class="form-control p_input @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" >
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe *</label>
                                    <input type="password" class="form-control p_input @error('password') is-invalid @enderror"
                                    name="password">
                                </div>
                                @error('password')
                                    <span class="invalid-feedback text-white mb-3 d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                <div class="form-group">
                                    <label>Confirmez votre mot de passe *</label>
                                    <input type="password" class="form-control p_input "
                                    name="password_confirmation">
                                </div>
                                <div class="form-group">
                                    <label>Image de profil</label>
                                    <input type="file" name="profileImage" class="form-control p_input @error('profileImage') is-invalid @enderror"
                                    name="file" accept="image/*">
                                </div>
                                @error('profileImage')
                                <span class="invalid-feedback text-white mb-3 d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div id="list-forfait">
                                    
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">S'abonner</button>
                                </div>
                                
                                <p class="sign-up">Vous avez déjà un compte ?<a href="/login"> Se connecter</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/dashboard/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/dashboard/assets/js/off-canvas.js"></script>
    <script src="/dashboard/assets/js/hoverable-collapse.js"></script>
    <script src="/dashboard/assets/js/misc.js"></script>
    <script src="/dashboard/assets/js/settings.js"></script>
    <script src="/dashboard/assets/js/todolist.js"></script>
    <script>
        $.get('https://app-webcup.herokuapp.com/api/forfait', (data) => {
            let html = ''
            data.forEach(element => {
                html += `<div class="card mb-2">
                            <div class="card-body">
                            <h5 class="card-title">${element.forfait_name}</h5>
                            <p class="card-text">
                                <ul class="list-group">
                                    <li class="list-group-item disabled">Durée : ${element.duration} ans</li>
                                    <li class="list-group-item disabled">Type de données : ${(element.typeData).toUpperCase()}</li>
                                    <li class="list-group-item disabled">Limite : ${element.limiteMax} Go</li>
                                    <li class="list-group-item disabled">Prix : ${element.price} ${element.priceUnit} </li>
                                </ul>
                            </p>
                            <p class="card-text"><h5 class="text-muted"><input name="id_forfait" type="radio" value="${element.id}"> Choisir</h5></p>
                            </div>
                        </div>`
            $("#list-forfait").html(html);
            });
        })
    </script>    
    <!-- endinject -->
</body>

</html>
