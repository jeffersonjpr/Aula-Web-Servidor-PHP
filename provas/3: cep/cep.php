<!DOCTYPE html>

<head>
    <title>Consulta cep</title>
</head>

<body>
    <?php include_once 'assinatura.html'; ?>
    <a href="index.php">Inicio</a> <br>
    <hr>
    
    <input type="text" id="cep" placeholder="00000-000" />
    <button id="req">Consultar</button>

    <form action="" enctype="application/x-www-form-urlencoded"></form>

    <script>
        document.all.req.addEventListener('click', function() {
            let url = 'https://viacep.com.br/ws/' + document.all.cep.value + '/json/';
            let xhr = new XMLHttpRequest();

            xhr.addEventListener('readystatechange', function() {
                if (this.readyState == 4 && this.status == 200) {
                    let endereco = JSON.parse(xhr.responseText);
                    document.body.innerHTML += '<p> <b>Rua</b>: ' + endereco.logradouro + '</p>';
                    document.body.innerHTML += '<p> <b>Bairro</b>: ' + endereco.bairro + '</p>';
                    document.body.innerHTML += '<p> <b>Cidade</b>: ' + endereco.localidade + '</p>';
                    document.body.innerHTML += '<p> <b>Estado</b>: ' + endereco.uf + '</p>';
                }
                console.log(this.readyState);
                console.log(`HTTP: ${this.status}`);
            });

            xhr.addEventListener('error', function() {
                alert('Ocorreu um erro');
            });

            xhr.open("GET", url, true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send();
        })
    </script>
</body>

</html>