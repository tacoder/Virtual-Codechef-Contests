<?php require("../../includes/header.php"); ?><h1>Kamehameha</h1><div class="content">
<h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/KMHAMHA.pdf">here</a></h3>
<h3>Problem Statement</h3>
<p>City of Byteland can be described as a <strong>2D</strong> grid of cells. Each cell may or may not contain a demon. You are given the list of cells that contain demons.</p>
<p>In a single Kamehameha attack, Goku can kill all the demons stading in a row or in a column. But using Kamehameha drains Goku's power. You are to tell the minimum number of Kamehameha attacks that will be required by Goku to destroy all the demons.</p>
<h3>Input</h3>
<p>The first line contains <strong>T</strong> the number of test cases. The first line of each test case contains <strong>N</strong> the number of cells where enemies are present. The following <strong>N</strong> lines contain two integers X and Y each describing the index of the cell in which the demon is present.</p>
<h3>Output</h3>
<p>For each case print the minimum number of attacks that are needed to kill all the monsters.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ T ≤ 10</li>
<li>1 ≤ N ≤ 1000</li>
<li>1 ≤ X, Y ≤ 10<sup>9</sup></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input</b>
1
3
0 0
1 0
0 1

<b>Output</b>
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kaushik_iska">kaushik_iska</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shangjingbo">shangjingbo</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-09-2013</td>
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