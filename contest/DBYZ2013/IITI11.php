<?php require("../../includes/header.php"); ?><h1>The Illusionist</h1><div class="content">

<p>Voldemort has now cast a new kind of spell named 'Illusio'. This spell creates the illusion that he is at multiple locations at the same time. Since Harry does not know the location of the real Voldemort, he must destroy all his illusions in order to win.</p>
<p>Assume there is a 2-dimensional square grid with illusions spread across it. Outside the grid, on the boundary, stands Harry Potter. Harry can quickly reach the exterior of any row or column and cast a spell which will destroy all the illusions in that row or column. Realizing that he has very little strength left, he must cast as few spells as possible and destroy all the illusions. Your job is to help him determine the minimum number of spells he will need to destroy all the illusions in the grid and win the duel.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>N</b> denoting the length of the square grid.</p>
<p>The second line contains an integer <b>T</b> denoting the total number of illusions in the grid.</p>
<p>Then follow <b>T</b> lines, the ith of which contains 2 space-separated integers <b>R[i]</b> and <b>C[i]</b> denoting the (1-based) row and column coordinates of the ith illusion.</p>
<h3>Output</h3>
<p>A single integer denoting the minimum number of spells needed to destroy all of Voldemort's illusions as per the problem statement.</p>
<h3>Constraints</h3>
<p>1 &lt;= <b>N</b> &lt;= 100</p>
<p>1 &lt;= <b>T</b> &lt;= <b>N*N</b></p>
<p>1 &lt;= <b>R[i]</b>, <b>C[i]</b> &lt;= <b>N</b></p>
<p>For all 1 &lt;= i &lt; j &lt;= <b>T</b>, either <b>R[i]!=R[j]</b> or <b>C[i]!=C[j]</b>, that is to say that the locations of all the <b>T</b> illusions are distinct</p>
<h3>Example</h3>
<pre><b>Input:</b>
4
3
1 3
2 1
4 3

<b>Output:</b>
2

</pre><h3>Explanation</h3>
<p>Since the illusions at (1,3) and (4,3) are both located in column 3, they can be destroyed with a single spell if Harry casts it on column 3. The illusion at (2,1) can be destroyed with another spell either by casting it on row 2 or column 1. This makes a total of 2 spells. It is easy to see that 2 is the least possible number.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/architk">architk</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-03-2013</td>
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