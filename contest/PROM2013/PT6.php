<?php require("../../includes/header.php"); ?><h1>Oggy And The Cockroaches</h1><div class="content">

<p>In the cartoon series “Oggy and the Cockroaches”. The Roaches Joey, Dee Dee and Marky are again building up a plan to make Oggy’s life miserable. They have called all their cockroach friends to help them. Oggy realizes this and now is making a counter plan for killing the roaches. You are a meticulous pest control agent Oggy just hired. You have to help him track all the cockroaches!! Oggy made a map of his square kitchen and divided it into tiles. On every tile sits some known number of cockroaches. You have a square trap that is dropped to cover a certain number of tiles. The trap may only cover tiles from within the map. However, the trap only catches cockroaches from one of the tiles which it has covered, having a minimum number of cockroaches on it. For all possible positions at which the trap can be dropped, determine number of cockroaches that will be caught.</p>
<h3>Input</h3>
<p>Two numbers, m  which is the size of the map, and  t which is size of the trap, followed by m rows with f numbers, determining the number of cockroaches on each tile.</p>
<h3>Output</h3>
<p>You should output m-t+1 rows with m-t+1 numbers in each row.</p>
<h3>Constraints</h3>
<ul>
<li><b>0</b> &lt; <b>m</b> ≤ <b>1000</b></li>
<li><b>0</b> &lt; <b>t</b> ≤ <b>m</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4 2
0 1 2 3
4 5 6 7
8 9 0 1
2 3 4 0


<b>Output:</b>
0 1 2
4 0 0
2 0 0

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abeersethi">abeersethi</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-04-2013</td>
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