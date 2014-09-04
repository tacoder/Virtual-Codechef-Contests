<?php require("../../includes/header.php"); ?><h1>Little Elephant and Colored Coins</h1><div class="content">

<p>The Little Elephant from the Zoo of Lviv very likes coins. But most of all he likes colored coins.</p>
<p>He has <b>N</b> types of coins, numbered from <b>1</b> to <b>N</b>, inclusive. The coin of the <b>i</b>-th type has the value <b>V<sub>i</sub></b> dollars and the color <b>C<sub>i</sub></b>. Note that he has infinite supply of each type of coins.</p>
<p>The Little Elephant wants to make exactly <b>S</b> dollars using the coins. What is the maximal number of different colors he can use to make exactly <b>S</b> dollars using some of the coins he has? If it's impossible, output <b>-1</b>. Also note that the Little Elephant wants to know this for many values of <b>S</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains a single integer <b>N</b>, denoting the number of types of coins. Each of the following <b>N</b> lines contains two space-separated integers <b>V<sub>i</sub></b> and <b>C<sub>i</sub></b>, denoting the value and the color of the coin of the <b>i</b>-th type. The next line contains a single integer <b>Q</b>, denoting the number of values of <b>S</b> to process. Each of the following <b>Q</b> lines contains a single integer <b>S</b>, denoting the coinage you should represent via given coins using maximum number of colors.</p>
<h3>Output</h3>
<p>For each value of <b>S</b> in the input, output the maximum number of different colors in the representation of <b>S</b> or <b>-1</b> if it is impossible to represent <b>S</b> via given coins.</p>
<h3>Constraints</h3>
<p> </p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>30</b></li>
<li><b>1</b> ≤ <b>V<sub>i</sub></b> ≤ <b>200000</b> (<b>2 * 10<sup>5</sup></b>)</li>
<li><b>1</b> ≤ <b>C<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>200000</b> (<b>2 * 10<sup>5</sup></b>)</li>
<li><b>1</b> ≤ <b>S</b> ≤ <b>10<sup>18</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 1
3 4
4 4
4
1
3
5
7

<b>Output:</b>
-1
1
2
2
</pre><h3>Explanation</h3>
<p> </p>
<ul>
<li>It is not possible to represent <b>S = 1</b> since every coin has value more than 1.</li>
<li><b>S = 3</b> can only be represented using one coin of the second type, hence only one color is used in the representation.</li>
<li><b>S = 5</b> can only be represented as <b>2 + 3</b>, which leads to two colors used.</li>
<li>For <b>S = 7</b> we have two representations as <b>2 + 2 + 3</b> (with two colors used) and <b>3 + 4</b> (with one color used). Hence, the answer is 2.</li>
</ul>
<p> </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-03-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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