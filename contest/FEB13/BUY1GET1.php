<?php require("../../includes/header.php"); ?><h1>Buy1-Get1</h1><div class="content">

<p>One day Alice visited Byteland to purchase jewels for her upcoming wedding anniversary.</p>
<p>In Byteland, every Jewelry shop has their own discount methods to attract the customers. One discount method called <b>Buy1-Get1</b> caught Alice's attention. That is, Alice buys one jewel, then she can get one additional jewel with the same color without charge by <b>Buy1-Get1</b>. </p>
<p>Alice lists the needed jewels as a string <b>S</b>, each letter denotes one jewel, and the same letters denote the same colors of jewels, and the different letters denote the different colors of jewels. The cost of each jewel is <b>1</b>. Your task is to calculate the minimum cost for getting all the jewels Alice listed.</p>
<h3>Input</h3>
<p>The first line of input contains a single line <b>T</b>, which represents the number of test cases. Then <b>T</b> lines will follow, and each contains a string <b>S</b>, which represents the jewels Alice needed.</p>
<h3>Output</h3>
<p>Output the minimum cost for each test case.</p>
<h3>Constraints</h3>
<p><b>1 ≤ T ≤ 100</b><br /> <b>1 ≤ |S| ≤ 200</b>, where <b>|S|</b> represents the length of the string <b>S</b>. <br /> The string <b>S</b> is case sensitive, and will contain only English characters in the range <b>[a-z], [A-Z]</b>.</p>
<h3>Sample</h3>
<pre>
<b>Input:</b>
4
ssss
ssas
sa
s

<b>Output:</b>
2
3
2
1
</pre><h3>Explanation</h3>
<p>In the first sample case, Alice needs <b>4</b> jewel of color <b>s</b>. One of the optimal way is the following:<br /> Buy the first <b>s</b> with cost <b>1</b>, and she can get the second <b>s</b> without charge. Then buy the third <b>s</b> with cost <b>1</b>, and she can get the last <b>s</b> without charge. In this case, she get <b>4</b> jewels with only cost <b>2</b>.</p>
<p>In the second sample case, Alice needs <b>3</b> jewels of color <b>s</b> and <b>1</b> jewel of color <b>a</b>. One of the optimal way is the following:<br /> Buy the second <b>s</b> with cost <b>1</b>, and she can get the last <b>s</b> without charge. Then buy the <b>a</b> and the first <b>s</b> with cost <b>2</b>. In this case, she get <b>4</b> jewels with only cost <b>3</b>.</p>
<p>In the third and fourth sample cases, she cannot save her money by using <b>Buy1-Get1</b>.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/khadarbasha">khadarbasha</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-09-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>