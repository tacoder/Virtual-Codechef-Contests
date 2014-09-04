<?php require("../../includes/header.php"); ?><h1>Ciel and New Menu</h1><div class="content">

<p>
Chef Ciel likes 8. Ciel's restaurant has many menus whose prices are multiples of 8.<br />
Now, Ciel has some digits written on a wooden board, and she'd like to cut the board to display prices in a new menu.<br />
In how many ways can Ciel choose consecutive digits from the board which denote integer multiples of 8?
</p>
<p>
In this problem, an integer must not have leading zeros.<br />
For example, 0, 8, 48, 1000 are integer multiples of 8, but 00, 5, 58, 01000 are not.
</p>
<h3>Input</h3>
<p>
An input contains a string <strong>S</strong>, which denotes digits written on the wooden board.
</p>
<h3>Output</h3>
<p>
Print the number of ways in which Ciel can choose consecutive digits which denote integer multiples of 8.
</p>
<h3>Constraints</h3>
<p>
1 ≤ |<strong>S</strong>| ≤ 1000000 (10<sup>6</sup>), where |<strong>S</strong>| means the length of <strong>S</strong>.<br />
<strong>S</strong> doesn't contain non-digit charactors.
</p>
<h3>Sample Input</h3>
<pre>5858</pre><h3>Sample Output</h3>
<pre>2</pre><h3>Output details</h3>
<p>
Ciel can choose 5, 8, 5, 8, 58, 85, 58, 585, 858 and 5858.<br />
Here, only 8 and 8 are multiples of 8.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Shangjingbo">Shangjingbo</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-11-2011</td>
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