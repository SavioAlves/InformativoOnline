
<!--pagina temporária apenas para facilitar a entrada nos menus necessarios.-->

<head>
    <title>Novo Post</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script src="js/igorescobar-jQuery-Mask-Plugin-535b4e4/jquery.mask.min.js"></script>
</head>
<body>
    <nav></nav>
    <div class="container">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">sort_by_alpha</i>
                    <input id="titulo" type="text" class="validate">
                    <label for="titulo">Título do post</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">message</i>
                    <textarea id="descricao" class="materialize-textarea"></textarea>
                    <label for="descricao">Descrição</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">perm_contact_calenda</i>
                    <input type="date" class="datepicker">
                </div>
            </div>
            <div class="row input-field col s12">
                <i class="material-icons prefix">done_all</i>
                <select multiple>
                    <option value="" disabled selected>Categoria</option>
                    <option value="1">Encontrão</option>
                    <option value="2">Reunião</option>
                    <option value="3">Evento</option>
                    <option value="4">Esportes</option>
                </select>
            </div>

            <div class="file-field input-field s12">
                <div class="btn">
                    <span>File</span>
                    <input type="file" multiple>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload one or more files">
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        $(function () {
            $(".button-collapse").sideNav();
            $('select').material_select();
            $('.datepicker').pickadate({});
            $(".dropdown-button").dropdown();
        });

    </script>
</body>