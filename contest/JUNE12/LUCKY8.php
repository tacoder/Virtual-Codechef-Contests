<?php require("../../includes/header.php"); ?><h1>Little Elephant and Product</h1><div class="content">

<p> A Little Elephant from the Zoo of Lviv likes lucky numbers very much. Everybody knows that the lucky numbers are positive integers whose decimal representation contains only the lucky digits <b>4</b> and <b>7</b>. For example, numbers <b>47</b>, <b>744</b>, <b>4</b> are lucky and <b>5</b>, <b>17</b>, <b>467</b> are not.</p>
<p> Let <b>F<sub>4</sub></b>(<b>X</b>) be the number of digits <b>4</b> in the decimal representation of <b>X</b>, and <b>F<sub>7</sub></b>(<b>X</b>) be the number of digits <b>7</b> in the decimal representation of <b>X</b>. For example, <b>F<sub>4</sub></b>(<b>456</b>) = <b>1</b>, <b>F<sub>4</sub></b>(<b>444</b>) = <b>3</b>, <b>F<sub>7</sub></b>(<b>1</b>) = <b>0</b>, <b>F<sub>7</sub></b>(<b>747</b>) = <b>2</b>. The Little Elephant wants to know the largest product <b>F<sub>4</sub></b>(<b>X</b>) ∙ <b>F<sub>7</sub></b>(<b>X</b>), where <b>L</b> ≤ <b>X</b> ≤ <b>R</b>. In other words he wants to know the value<br />
 <b>max</b>{<b>F<sub>4</sub></b>(<b>X</b>) ∙ <b>F<sub>7</sub></b>(<b>X</b>) : <b>L</b> ≤ <b>X</b> ≤ <b>R</b>}.</p>
<h3>Input</h3>

<p> The first line of the input file contains an integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains two integers <b>L</b> and <b>R</b> separated by exactly one space.</p>
<h3>Output</h3>

<p> For each test case output a single line containing the answer for the corresponding test case.</p>
<h3>Constraints</h3>

<p>
1 ≤ <b>T</b> ≤ 1000
</p>
<p>
1 ≤ <b>L</b> ≤ <b>R</b> ≤ 10<sup>18</sup></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1 10
1 100
47 74

<b>Output:</b>
0
1
1
</pre><h3>Explanation</h3>

<p>In both second and third test cases the maximal product is achieved at the numbers <b>47</b> and <b>74</b>.</p>
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
            <td>3-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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