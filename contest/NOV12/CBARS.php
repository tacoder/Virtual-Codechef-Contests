<?php require("../../includes/header.php"); ?><h1>A Wonderful Chocolate</h1><div class="content">

<p>
A few days ago Chef decided to cook a new dish – chocolate.  This must be something amazing. The idea is that chocolate bar will be divided into cells. It must be long, but narrow. To interest customers every bar must be unique. Bar will consist of cells of black or white chocolate. In addition every bar must be good looking. It means that the bar must not contain any totally white or totally black rectangle, whose width <b>and</b> length are more than 1 (Note that a bar is good if <b>(width > 1 and length = 1)</b> or <b>(length > 1 and width = 1)</b>). Now, Chef wants to know how many bars can he cook? He’s not good in computer programming, so this task is for you.<br />
 By the way, it's not permitted to rorate bars. It means that WBB and BBW are different bars.</p>
<h3>Input</h3>
<p>
Input contains two integers: width <i>a (1 ≤ a ≤ 6)</i> and length <i>b (1 ≤ b &lt; 2<sup>63</sup>)</i>.</p>
<h3>Output</h3>
<p>
Print in output a single integer which is the answer. Answer can be a very big number, so print it modulo <i>10<sup>9</sup>+7 (1000000007)</i>.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2 2

<b>Output:</b>
14

<b>Input:</b>
3 3

<b>Output:</b>
322
</pre><h3>Explanation</h3>
<p>
In the first sample, there are 2^(2*2) = 16 ways coloring the chocolate in total, and the only following 2 chocolates are not good
</p>
<pre>
<b>WW</b>
<b>WW</b>
</pre><p>The bar contains a totally white rectangle of length = 2 and width = 2.</p>
<pre>
<b>BB</b>
<b>BB</b>
</pre><p>The bar contains a totally black rectangle of length = 2 and width = 2.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witalij_hq ">witalij_hq </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-08-2012</td>
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