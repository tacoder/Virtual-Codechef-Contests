<?php require("../../includes/header.php"); ?><h1>Land-fill</h1><div class="content">
<p> </p>
<p>Tolstoy’s neighbourhood is being acquired by multinational for setting up a new manufacturing plant. The facility requires a plain patch of land which consists of the numerous blocks of lands that are already in row. Each block of land (many blocks make up the entire acquired land patch) can be of three types - Consisting of a pile of soil, consisting of a pit, or having none of these.</p>
<p>Since the multinational requires the land to be devoid of any , Tolstoy has been asked to fill up the pits with soil. However, with the strict timelines that all multinationals operate with, he has been assigned the hard deadline of finishing up the task within t units of time.</p>
<p>Tolstoy required <b>1 unit of time</b> to reach the first block of land from his work place. After which moving from one block to the neighboring block requires 1 unit of time. Tolstoy is allowed to carry any amount of soil that he wishes to in order to complete the operation. He can also pick up the soil, already available in some blocks of land and use it to fill the pit. However the pile of soil in one block can fill only one pit and assume that each block contains identically only a single pile of soil or a single pit or nothing. The company rewards Tolstoy only if he fills up all the pits of the land. Also, once pit is filled on a land, he won't put soil again in the same block. He can also skip the block with pits and soil while moving. Time taken to pick the soil and filling the pit can be neglected.</p>
<p>Now in order to work with the fixed deadline that Tolstoy has, he would initially need to carry <b>m units</b> of soil with himself. You need to help him determine the least value of m such that he finishes the task within the stipulated deadline. </p>

<h3>Input</h3>
<p>The input consists of two space-separated integers <b>k</b> and <b>t</b> followed by the next line of k characters, the <b>i-th of them equals "H" </b>(if the i-th block contains a pit), "S" (if the i-th segment contains a pile of soil) or "." (if the i-th segment doesn't contain a pit or a soil).<br />
It is guaranteed that there is at least one block with a pit.</p>
<h3>Output</h3>
<p>Print "-1"(without the quotes) if it isn't possible to fill all pits in the given deadline. Otherwise, print on a single line the minimum possible value of m.</p>
<h3>Constraints</h3>
<p>2 ≤ k ≤ 5x10<sup>5</sup> <br />
1 ≤ t ≤ 10<sup>9</sup> </p>
<h3>Example</h3>
<pre><b>Input</b>
4 4
HSHS
<b>Output</b>
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divyambansal">divyambansal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>24-10-2013</td>
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