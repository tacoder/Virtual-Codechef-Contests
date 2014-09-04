<?php require("../../includes/header.php"); ?><h1>Coin Calculator</h1><div class="content">

<p>The King of Holumba Island has devised a coin system for exchange of goods and trade among the people. There are 4 coins provided by the king. The coins are of the value Rs. 1, Rs. 2, Rs. 3, and Rs. 5. Devise a coin calculator which finds out the number of coins required to compute an amount of money, such that a least amount of coins are needed. When there is more than one solution, the output should be such that the coins with more value are given preference.    </p>

<h3>Input</h3>
<p>The amount to compute (say i)</p>

<h3>Output</h3>
<p>The output should be in 4 lines ,as shown below(refer example if any confusion)  :</p>
<ul>
<li>a = number of Rs. 5 coins</li>
<li>b = number of Rs. 3 coins </li>
<li>c = number of Rs. 2 coins</li>
<li>d = number of Rs. 1 coins</li>
</ul>

<h3>Constraints</h3>
<p>Input i<br /><br />
   0&lt;=i&lt;=1000</p>
<h3>Example</h3>
<ul>
<li>Input<br />12<br />Output<br />2<br />0<br />1<br />0</li>
<li>Input<br />24<br />Output<br />4<br />1<br />0<br />1</li>
</ul>
<h3>Explanation</h3>
<p>For input<br /><br />
24<br /><br />
24 = (4 X Rs. 5) + (1 X Rs. 3) + (0 X Rs. 2) + (1 X Rs. 1)<br /><br />
Output is <br /><br />
4<br />1<br />0<br />1
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aranta">aranta</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-02-2014</td>
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