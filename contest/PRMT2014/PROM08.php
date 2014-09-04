<?php require("../../includes/header.php"); ?><h1>Land of the Shire</h1><div class="content">
<p> </p>
<p>The land of The Shire is separated from Rivendell by a long hanging bridge. When viewed from the side, the bridge seems to be an endless array of planks. The planks of the array are numbered from left to right with integers, starting with 1. The elves from Rivendell are playing a game. At the beginning of the game the i-th elf is above the plank number hi. Every elf can only take one step to the left or one step to the right or stay in the same position. During the game each elf's movement does not affect the movement of the other elves: there can be more than one elf on any of the planks. A plank is considered to be passed if at least one elf has visited this plank. In particular, all of the planks numbered h1, h2, ..., hn have been passed at the beginning of the game. m distinct planks with numbers p1, p2, ..., pm need to be passed. Determine the minimum steps the elves need to move to pass over all the given planks. Note that an arbitrary number of other planks can also be passed./p&gt;</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains two space-separated integers n, m (1 ≤ n, m ≤ 10^5) — the number of elves  and the number of planks to be passed, accordingly. The second line contains n distinct integers hi in ascending order (1 ≤ hi ≤ 10^10, hi &lt; hi + 1) — the initial positions of the each elf. The third line contains m distinct integers pi in ascending order (1 ≤ pi ≤ 10^10, pi &lt; pi + 1) - the numbers of planks to be passed.</p>
<h3>Output</h3>
<p>Print a single number — the minimum steps required to pass all the needed planks.</p>
<h3>Example</h3>
<pre><b>Input:</b>
3 4
2 5 6
1 3 6 8

<b>Output:</b>
2

<p>


<b>Note : This problem has been inspired from previously solved questions.</b> 
</p>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/himanshuk123">himanshuk123</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-04-2014</td>
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