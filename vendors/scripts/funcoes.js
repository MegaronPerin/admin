function verificaCep(valor){

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('endereco').value="...";
            document.getElementById('bairro').value="...";
            document.getElementById('cidade').value="...";
            document.getElementById('uf').value="...";

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
}

function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('endereco').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('endereco').value=(conteudo.logradouro);
        document.getElementById('bairro').value=(conteudo.bairro);
        document.getElementById('cidade').value=(conteudo.localidade);
        document.getElementById('uf').value=(conteudo.uf);
    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}

function confirmDataRegister(){

    var name  = document.getElementById('name').value;
    var email  = document.getElementById('email').value;
    var dtnasc  = document.getElementById('dt-nascimento').value;
    var cep  = document.getElementById('cep').value;
    var endereco  = document.getElementById('endereco').value;
    var bairro  = document.getElementById('bairro').value;
    var cidade  = document.getElementById('cidade').value;
    var uf  = document.getElementById('uf').value;
    var complemento  = document.getElementById('complemento').value;

    var logradouro = endereco + ", " + complemento + ", " + bairro + ", " + cidade + " - " + uf + " CEP: " + cep ;

    document.getElementById('info_name').innerHTML = name;
    document.getElementById('info_email').innerHTML = email;
    document.getElementById('info_dtnasc').innerHTML = dtnasc;
    document.getElementById('info_endereco').innerHTML = logradouro;

}

function sendNewRegister(){

    var form = document.querySelector('#formRegister');
    var formData = new FormData(form);

    const dataObj = {};
    formData.forEach((value, key) => (dataObj[key] = value));

    console.log(dataObj);

    var urlbase  = document.getElementById('urlBase').value;
    
      
    axios.post(urlbase+'/login/cadastro', dataObj)
        .then(function (response) {
            console.log(response);
        })
        .catch(function (error) {
        console.log(error);
    });
    
}