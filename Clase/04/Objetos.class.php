<?php

	abstract class classPoligono
	{
		
		abstract function calculo();
	}


	class classCuadrado extends classPoligono
	{
		function calculo()
		{
			echo 'area de un cuadrado : a=l*l<br>'."\n";
		}
	}

	class classRectangulo extends classPoligono
	{
		function calculo()
		{
			echo 'area de un rectangulo : a=b*h<br>'."\n";
		}
	}

	class classTriangulo extends classPoligono
	{
		function calculo()
		{
			echo 'area de un triangulo : a=(b*h)/2<br>'."\n";
		}
	}
 

	function area(classPoligono $obj)
	{
		$obj->calculo();
	}

	$cuadrado = new classCuadrado;
	$rectangulo = new classRectangulo;
	$triangulo = new classTriangulo;
	
	area($cuadrado);
	area($rectangulo);
	area($triangulo);
