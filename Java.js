document.getElementById('search-form').addEventListener('submit', function(event) {
    event.preventDefault(); // previne o envio do formulário
  
    var searchTerm = document.getElementById('search-input').value;
    // Aqui você pode adicionar o código para processar a pesquisa, como enviar uma requisição para o servidor ou filtrar resultados locais
    console.log('Termo de busca:', searchTerm);
  });





  