  /**
   * Select what form to display
   */

  function clearForms() {
    document.querySelector('#qone').classList.add('display-hidden');
  }

  function resetForms() {
    document.querySelector('.form-init-q').classList.remove('display-hidden');
    document.querySelector('.form-choices').classList.remove('display-hidden');
    document.getElementById('formRetorno').classList.add('display-hidden');
    document.getElementById('formInscricao').classList.add('display-hidden');
  }
  
  function showRetorno() {
    let hide = document.getElementById('formRetorno');
    const step1 = document.querySelector('.form-choices');
    hide.classList.remove('display-hidden');
    step1.classList.add('display-hidden');
    document.querySelector('.form-init-q').classList.add('display-hidden');
   }

   function showInscricao() {
    let hide = document.getElementById('formInscricao');
    const step1 = document.querySelector('.form-choices');
    hide.classList.remove('display-hidden')
    step1.classList.add('display-hidden');
    document.querySelector('.form-init-q').classList.add('display-hidden');
   }
