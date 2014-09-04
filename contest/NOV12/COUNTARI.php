<?php require("../../includes/header.php"); ?><h1>Arithmetic Progressions</h1><div class="content">

<p>
Given <b>N</b> integers <b>A<sub>1</sub>, A<sub>2</sub>, …. A<sub>N</sub></b>, Dexter wants to know how many ways he can choose three numbers such that they are  three consecutive terms of an arithmetic progression.
</p>
<p>
Meaning that, how many triplets <b>(i, j, k)</b> are there such that  <b>1  ≤ i &lt; j &lt; k ≤ N</b> and <b>A<sub>j</sub> - A<sub>i</sub> = A<sub>k</sub> - A<sub>j</sub></b>.
</p>
<p>
So the triplets (2, 5, 8), (10, 8, 6), (3, 3, 3) are valid as they are three consecutive terms of an arithmetic<br />
progression. But the triplets (2, 5, 7), (10, 6, 8) are not.
</p>
<h3>Input</h3>
<p>
First line of the input contains an integer <b>N (3 ≤ N ≤ 100000)</b>. Then the following line contains <b>N</b> space separated integers <b>A<sub>1</sub>, A<sub>2</sub>, …, A<sub>N</sub></b> and they have values between <b>1</b> and <b>30000</b> (inclusive).
</p>
<h3>Output</h3>
<p>
Output the number of ways to choose a triplet such that they are three consecutive terms of an arithmetic progression.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
10
3 5 3 6 3 4 10 4 5 2

<b>Output:</b>
9

</pre><h3>Explanation</h3>
<p>The followings are all 9 ways to choose a triplet
</p>
<pre>
1 : <b>(i, j, k)</b> = (1, 3, 5), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 3, 3)
2 : <b>(i, j, k)</b> = (1, 6, 9), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 4, 5)
3 : <b>(i, j, k)</b> = (1, 8, 9), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 4, 5)
4 : <b>(i, j, k)</b> = (3, 6, 9), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 4, 5)
5 : <b>(i, j, k)</b> = (3, 8, 9), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 4, 5)
6 : <b>(i, j, k)</b> = (4, 6, 10), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (6, 4, 2)
7 : <b>(i, j, k)</b> = (4, 8, 10), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (6, 4, 2)
8 : <b>(i, j, k)</b> = (5, 6, 9), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 4, 5)
9 : <b>(i, j, k)</b> = (5, 8, 9), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 4, 5)
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rustinpiece">rustinpiece</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-10-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>