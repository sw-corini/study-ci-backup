<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php ci study</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/common.css">
    <link rel="stylesheet" href="/public/css/layout.css">
    <script scr="/public/js/common.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <!--required="" aria-required="true"-->
            <div class="col s6 m-auto">
                <section id="join-wrap" class="center-align row">
                    <?//=validation_errors()?>
                    <h3>회원가입</h3>
                    <div class="divider"></div>
                    <div id="join-form" class="col s12">
                        <?=form_open(base_url().'sign_up')?>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" class="validate" name="user_id" value="<?=set_value('user_id')?>">
                                <label for="icon_prefix">User ID</label>
                            </div>
                            <?=form_error('user_id')?>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input id="icon_prefix" type="password" class="validate" name="user_pwd" value="">
                                <label for="icon_prefix">User Password</label>
                            </div>
                            <?=form_error('user_pwd')?>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input id="icon_prefix" type="password" class="validate" name="user_pwd2" value="">
                                <label for="icon_prefix">User Password Check</label>
                            </div>
                            <?=form_error('user_pwd2')?>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">person</i>
                                <input id="icon_telephone" type="tel" class="validate" name="user_name" value="<?=set_value('user_name')?>">
                                <label for="icon_telephone">User Name</label>
                            </div>
                            <?=form_error('user_name')?>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">phone_iphone</i>
                                <input id="icon_telephone" type="tel" class="validate" name="user_phone" value="<?=set_value('user_phone')?>">
                                <label for="icon_telephone">User Phone</label>
                            </div>
                            <?=form_error('user_phone')?>
                            <div class="input-field col s12 center-align">
                                <button class="btn waves-effect waves-light btn-large" type="submit" name="action">
                                    회원가입
                                    <i class="material-icons right">people</i>
                                </button>
                            </div>  
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
</html>