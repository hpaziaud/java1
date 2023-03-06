<!DOCTYPE html>
<html>
<head>
	<title>Calcul du factoriel</title>
	<script>
		function calculerFactoriel() {
			var n = prompt("Entrez un chiffre N :");
			var factoriel = 1;
			for (let i = 1; i <= n; i++) {
			  factoriel *= i;
			}
			alert("Le factoriel de " + n + " est " + factoriel);
		}
	</script>
</head>
<body>
	<h1>Calcul du factoriel</h1>
	<button onclick="calculerFactoriel()">Calculer le factoriel</button>
</body>
</html>
