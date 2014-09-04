<?php require("../../includes/header.php"); ?><h1>Paying optimally</h1><div class="content">
<p>The currency of Dholakpur is pretty awesome. There notes have values <b> 1, C, C<sup>2</sup>, C<sup>3</sup> ... </b>. The sequence goes on till infinity, so notes have unbounded values.</p>
<p>Little Bheem is a resident of Dholakpur and runs a Laddu shop. He always keeps infinite number of notes of each value with him, but pays using minimum number of notes. For example, if <b>C</b> = 5 and he has to pay 32 rupees, he will pay using one note of value 25, one note of value 5, and two notes of value 1. He cannot pay 32 rupees with fewer than four notes.</p>
<p>Bheem is wondering what is <b>K<sup>th</sup></b> smallest amount which, if paid using fewest possible notes, would require exactly <b>S</b> notes.</p>
<p> </p>
<h3>Input</h3>
<p> </p>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /> Each test is descried by exactly one lines, containing three space separated integers <b>C</b>, <b>S</b> and <b>K</b>.</p>
<p> </p>
<h3>Output</h3>
<p> </p>
<p>For each test case, output a separate line containing the required answer.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100 </li>
<li>2 ≤ <b>C</b> ≤ 50 </li>
<li>0 ≤ <b>S</b> ≤ 500 </li>
<li>1 ≤ <b>K</b> ≤ 10<sup>18</sup> </li>
<li>The answer will be at most 10<sup>18</sup></li>
</ul>
<h3>Subtask 1 (20 points)</h3>
<p> </p>
<p><b>K = 1</b><br /><br /> the answer will be at most 40000000<br /><br /> Time limit is 3 seconds.<br /><br /></p>
<h3>Subtask 2 (20 points)</h3>
<p><b>C = 2</b><br /><br /> the answer will be at most 40000000<br /><br /> Time limit is 3 seconds.<br /><br /></p>
<h3>Subtask 3 (20 points)</h3>
<p><b>K</b> is small. Formally, <b>(K-1)*(C-1) ≤ S</b><br /><br /> the answer will be at most 40000000<br /><br /> Time limit is 3 seconds.<br /><br /></p>
<h3>Subtask 4 (20 points):</h3>
<p>the answer will be at most 40000000<br /><br /> Time limit is 3 seconds.</p>
<h3>Subtask 5 (20 points):</h3>
<p><i> No special constraints </i><br /><br /> Time limit is 0.3 seconds.</p>
<p> </p>
<h3>Sample Input</h3>
<p> </p>
<p>3<br /><br /> 5 1 3<br /><br /> 4 3 5<br /><br /> 5 4 4<br /><br /><br /><br /><br /></p>
<p> </p>
<h3>Sample Output</h3>
<p> </p>
<p>25<br /><br /> 18<br /><br /> 16<br /><br /><br /><br /></p>
<h3>Explanation</h3>
<p>For test case# 1, all the amounts which require exactly 1 note are: 1, 5, 25, 125 ...<br /><br /> For test case# 2, all the amounts which require exactly 3 notes are: 3, 6, 9, 12, 18 ... <br /><br /> For test case# 3, all the amounts which require exactly 4 notes are: 4, 8, 12, 16 ... <br /><br /><br /><br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/utkarsh_lath">utkarsh_lath</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko‎">Rubanenko‎</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-07-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.3 - 3 sec</td>
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