<?php require("../../includes/header.php"); ?><h1>Little Elephant and Candies</h1><div class="content">

<p>A Little Elephant and his friends from the Zoo of Lviv like candies very much.</p>
<p>There are <b>N</b> elephants in the Zoo. The elephant with number <b>K</b> (<b>1</b> ≤ <b>K</b> ≤ <b>N</b>) will be happy if he receives at least <b>A<sub>K</sub></b> candies. There are <b>C</b> candies in all in the Zoo.</p>
<p>The Zoo staff is interested in knowing whether it is possible to make all the <b>N</b> elephants happy by giving each elephant at least as many candies as he wants, that is, the <b>K</b><sup>th</sup> elephant should receive at least <b>A<sub>K</sub></b> candies. Each candy can be given to only one elephant. Print <b>Yes</b> if it is possible and <b>No</b> otherwise.</p>
<h3>Input</h3>

<p>The first line of the input file contains an integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. Each test case consists of exactly 2 lines. The first line of each test case contains two space separated integers <b>N</b> and <b>C</b>, the total number of elephants and the total number of candies in the Zoo respectively. The second line contains <b>N</b> space separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>.</p>
<h3>Output</h3>

<p>For each test case output exactly one line containing the string <b>Yes</b> if it possible to make all elephants happy and the string <b>No</b> otherwise. Output is case sensitive. So <b>do not print YES or yes</b>.</p>
<h3>Constraints</h3>

<p><b>1</b> ≤ <b>T</b> ≤ <b>1000</b>
</p>
<p><b>1</b> ≤ <b>N</b> ≤ <b>100</b>
</p>
<p><b>1</b> ≤ <b>C</b> ≤ <b>10<sup>9</sup></b>
</p>
<p><b>1</b> ≤ <b>A<sub>K</sub></b> ≤ <b>10000</b>, for <b>K</b> = <b>1</b>, <b>2</b>, ..., <b>N</b></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2 3
1 1
3 7
4 2 2

<b>Output:</b>
Yes
No

</pre><h3>Explanation</h3>

<p><b>Case 1.</b> We can give one candy to the first elephant and two candies to the second elephant and make them both happy. Hence the answer is <b>Yes</b>. Alternatively we can give one candy to each elephant and left one candy for ourselves but they again will be happy.</p>
<p><b>Case 2.</b> Even if we give four candies to the first elephant and two candies to the second elephant we will have only one candy left and can not make last elephant happy since he needs two candies for his happiness. Hence the answer is <b>No</b>.</p>
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
            <td>20-03-2012</td>
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