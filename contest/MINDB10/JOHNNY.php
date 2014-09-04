<?php require("../../includes/header.php"); ?><h1>Johnny Goes Shopping</h1><div class="content">

<p></p><p><br />
Johnny visited his favourite supermarket to purchase as many sweets as he could afford. Since daddy had left his credit card at home untended, this was not really a problem. Once he had (barely) managed to push the trolley laden with chocolate bars past the cash desk, he began to wonder how to carry all the shopping home without breaking his back.
</p>
<p>
You must know that Johnny is a perfectly normal child, and has exactly 2 hands. Help him distribute his load between both hands so as to minimise the difference in load between both hands.<br />
</p><br />
<h3>Input</h3><br />
<p><br />
The first line of input contains a single integer <i>n</i>&lt;= 10000 denoting the number of sweet packets Johnny has bought. In each of the next <i>n</i> lines a single positive integer is given, describing the weight of the respective packet (the weight is an integer value never exceeding 10<sup>14</sup>).<br />
</p><br />
<h3>Output</h3><br />
<p><br />
In separate lines, output the numbers of the packets which Johnny should carry in his left hand. Assume packets are numbered in the input order from 1 to <i>n</i>.<br />
</p><br />
<h3>Scoring</h3><br />
<p><br />
Your program shall receive log<sub>10</sub> (<i>s</i>/(|<i>d</i>|+1)) points, where <i>s</i> is the total weight of all parcels, while <i>d</i> denotes the difference in weight between the load carried in Johnny's left and right hand.<br />
</p><br />
<h3>Example</h3>
<p>
For the sample input:</p>
<pre>
3
5
8
4
</pre><p>
a program outputting:</p>
<pre>
2
3
</pre><p>will score log<sub>10</sub> ((5+8+4)/(|8+4-5|+1))= 0.327 points.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-12-2008</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>