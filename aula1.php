<?php
$nome = 'welder';  #atribundo valores para a Variavel

if($nome==='welder'){  #Processo de validação
    #echo 'ok';
    }
    else{
        #echo 'nao';
    }
    
    #estudar encode
    
    $sobreNome = array(  #este é um array
       # 'nome' => 'welder',
        #'sobre'=>'Zambotti'
        'dados' => array(   #este é um array dentro do array sobreNome
            'endereco'=> array(   #este é um array dentro do array dentro do array sobreNome e dentro do Array dados
                 'altemar',
                 '0123',
                 '240',)
            )
        
    );
   # var_dump($sobreNome);   #para debugar a Variavel
    #echo 'Rua'.' '.$sobreNome['dados']['endereco']['rua'].' '.$sobreNome['dados']['endereco']['cep'];
    
  # echo $sobreNome['dados'].$sobreNome['sobre'];
   #criação do Array
    
    /*$sobreNome = array=(
         'welder',
        ' Zambotti'
    );
    
   echo $sobreNome[0].$sobreNome[1];
   #criação do Array*/
    
    for($i=0;$i<3;$i++){
        #echo @$sobreNome['dados']['endereco'][$i];
        
        
    }
   
    foreach($sobreNome as &$v){
       foreach ($v as $teste){
           echo $teste;
           foreach ($teste as $result){
               echo $result;
           }
       }
       
    }
 #      var_dump($sobreNome);
  ?>

