nome = document.querySelector("#nome");
descricao = document.querySelector("#descricao");
classificacao = document.querySelector("#classificacao");
divInsercao = document.querySelector("#lateral-icones");
urlLinkedin = document.querySelector("#linkedin");
urlLattes = document.querySelector("#lattes");
artigosPublicados = document.querySelector("#artigos");

function recebeValor(){
    link = location.href;
    variaveis = link.split("?");
    return variaveis[1];
}


pessoaSelecionada = recebeValor();

pessoas = [
    { 
        id: "camila",
        nome: "Camila Guedes",
        classificacao: "DOUTORANDA",
        descricao: "Graduada em Biomedicina pela Universidade São Camilo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices purus id odio vestibulum euismod. Suspendisse lobortis, leo id varius faucibus, ipsum massa consectetur turpis, ut dapibus orci ante eget turpis. Aenean orci enim, placerat a ultricies non, aliquam at eros. Curabitur sed arcu ultrices, condimentum ligula vitae, venenatis arcu. Pellentesque quis purus eu neque consequat vehicula. Praesent arcu lorem, viverra ut arcu eu, dapibus euismod magna. Praesent tristique augue suscipit justo iaculis tempus. Praesent ac eros imperdiet, dapibus urna imperdiet, malesuada nunc.",
        artigosPublicados: " ",
        urlImg: "../imgs/fotos-individuais/cami.png",
        urlLinkedin: "",
        urlLattes: ""
    },
    { 
        id: "iza",
        nome: "Izadora de Souza",
        descricao: "",
        classificacao: "DOUTORANDA",
        artigosPublicados: " ",
        urlImg: "../imgs/fotos-individuais/iza.png",
        urlLinkedin: "",
        urlLattes: ""
    },
    { 
        id: "linda",
        descricao: "",
        nome: "Linda Seregni",
        classificacao: "DOUTORANDA",
        artigosPublicados: " ",
        urlImg: "../imgs/fotos-individuais/linda.png",
        urlLinkedin: "",
        urlLattes: ""
    }, 

]

function preenchePagina(){
    for(i=0; i<pessoas.length; i++){
        if(pessoas[i].id == pessoaSelecionada){
            nome.innerHTML = pessoas[i].nome;
            descricao.innerHTML = pessoas[i].descricao;
            classificacao.innerHTML = pessoas[i].classificacao;
            urlLinkedin = pessoas[i].urlLinkedin;
            urlLattes = pessoas[i].urlLattes;
            imgPessoa = document.createElement("img");
            imgPessoa.setAttribute('src', pessoas[i].urlImg);
            imgPessoa.classList.add("img-pessoa-ap")
            divInsercao.appendChild(imgPessoa);
        }
    }
}

preenchePagina();