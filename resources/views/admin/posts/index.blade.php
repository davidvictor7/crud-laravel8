<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Project Laravel</title>
</head>
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">Sistema de Posts</a>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit" style="background-color: white;">Search</button>
            </form>
          </div>
        </div>
    </nav>
    
    <div class="container">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
            <button class="btn btn-primary me-md-2 create" type="button">Novo Post</button>
        </div>
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Titulo</th>
                <th>Conteudo</th>
                <th>Data de Criação</th>
                <th>Data de Atualização</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $item)
                    <tr>
                        <th>{{$item->title}}</th>
                        <td>{{$item->content}}</td>
                        <td>{{\Carbon\Carbon::parse($item->created_at)->format('d/m/Y H:m:s')}}</td>
                        <td>{{\Carbon\Carbon::parse($item->updated_at)->format('d/m/Y H:m:s')}}</td>
                        <td>
                            <button type="button" id={{$item->id}} class="btn btn-primary">Editar</button>
                            <button type="button" id={{$item->id}} class="btn btn-danger">Deletar</button>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="modal fade bd-modal-lg modalCreate" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar Novo Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 0;">
                <div class="col">
                    <div class="view-product" id="ttttttt">
                        <form>
                            @csrf
                            <div class="container">
                                <div class="row top-buffer">
                                    <label class="form-label"><b>Titulo do post</b></label>
                                    <input class="form-control" id="tituloPost" placeholder="Digite o titulo do post">
                                </div>
                                <div class="row top-buffer">
                                    <label class="form-label"><b>Conteudo do post</b></label>
                                    <input class="form-control"id="conteudoPost" placeholder="Digite o conteudo do post">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                <button type="button" id="btnAdicionar" class="btn btn-primary" onClick="cadastrarPost()" style="margin-top: 0px;border-radius: 4px;">Adicionar</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<style>
    .top-buffer{
        margin-top: 20px;
    }
</style>