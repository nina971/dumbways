let toko = 2;
let tempatAB = 5;
let tempatBC = 1.5;
// var tempat CD = 2.5;
// let bensinKM = 2.5;
let tempatA = tempatAB + tempatBC + 2.5;
let tempatC = tempatBC + tempatAB + toko;
let tempatD = 2.5 + " KM | " + "Rp. "+(2.5 * 1 / 2.5 ) * 7000 + "| " + (2.5 * 1 / 2.5)+" liter";
function perjalananSales(toko,tempatA,tempatD,tempatC){
    
	return "Toko - Tempat A "+ toko+" KM | "+"Rp."+(toko * 1 / 2.5)*7000 +"| "+ (toko * 1 / 2.5)+" liter"
			+ "\n" + "Tempat A - Tempat D "+ tempatA + " KM | " + "Rp. "+(tempatA * 1 / 2.5 ) * 7000 + "| " + (tempatA * 1 / 2.5)+" liter"+
			"\n" + "Tempat D - Tempat C "+ tempatD
			+ "\n" + "Tempat C - Toko "+ tempatC + " KM | " + "Rp. "+(tempatC * 1 / 2.5 ) * 7000 + "| " + (tempatC * 1 / 2.5)+" liter"
			
	;
			
}

document.write( perjalananSales(toko,tempatA,tempatD,tempatC) 
	+"\n"+ "<b>"+"Total Jarak = "+ (toko+tempatA+tempatC+2.5) +" KM"+"</b>"
	+"\n"+ "<b>"+"Total Harga = "+" Rp. "+(((toko * 1 / 2.5)*7000) + ((tempatA * 1 / 2.5 ) * 7000) + ((2.5 * 1 / 2.5 ) * 7000) + ((tempatC * 1 / 2.5 ) * 7000)) +"</b>"
	+"\n"+ "<b>"+"Total Bensin = "+" Rp. "+(((toko * 1 / 2.5)) + ((tempatA * 1 / 2.5 )) + ((2.5 * 1 / 2.5 )) + ((tempatC * 1 / 2.5 )))+" Liter " +"</b>"
	);