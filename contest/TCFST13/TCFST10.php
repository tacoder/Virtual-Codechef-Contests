<?php require("../../includes/header.php"); ?><h1>Network Connectivity</h1><div class="content">
<p> </p>
<p>A sysad wanted to check some parameter for his lab and thus he conducted an experiment daily till all the possible pairs of the systems were tested. In his lab some systems were interconnected with link which could be deactivated in time t (time taken to deactivate each link is different). In the experiment, sysad picked a different pair each day and calculated the signum parameter of the pair. To calculate the required parameter he started deactivating the links (need not be on path connecting this pair) which takes the least time in the existing links, till the pair was disconnected. The total time taken to do so was stored as the signum parameter for the pair. After conducting the experiment he restored all the links. He conducted the experiment for each pair, and when all his experiments were done, he summed all the calculated parameter and thus obtained the required parameter for the lab. Note that, in some cases pairs may not be connected thus leading to the signum parameter being 0 for that pair.  </p>
<p> </p>
<h3>Input</h3>
<p>The first line consisted of two integers k and l where k is the total number of system in the lab and l being the total number of links.<br />
For simplicity each system is given a number from 1 to k. Thus, next l lines consisted of three space separated integers, a b c where c is the time to deactivate the link between a and b numbered system.</p>
<p> </p>
<h3>Output</h3>
<p>Output the required parameter for the lab modulo (10<sup>9</sup>)</p>
<p> </p>
<h3>Constraints</h3>
<p>1 ≤ k ≤ 100000 <br />
1 ≤ l ≤ 100000 <br />
1 ≤ a <br />
b ≤ k <br />
1 ≤ c ≤ 100000<br />
Each link takes different time to get deactivated <br />
Number allocated to each system is unique </p>
<h3>Example</h3>
<pre><b>Input:</b>
3 2
1 3 94
2 3 28
<b>Output:</b>
178
</pre><p> </p>
<h3>Explanation</h3>
<p><b>For points 2 and 3, cost is 28. For points 1 and 2 also 28. But for points 1 and 3, first 28 will be broken, then 94, giving a total of 28+28+28+94  = 178</b> ...</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divyambansal">divyambansal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-10-2013</td>
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