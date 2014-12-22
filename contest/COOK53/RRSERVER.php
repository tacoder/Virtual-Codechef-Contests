<?php require("../../includes/header.php"); ?><h1>Servers</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/mandarin/RRSERVER.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/russian/RRSERVER.pdf">Russian</a> as well.</h3>
<p>There are <b>N</b> servers which you have to place in <b>N</b> slots. Slots and servers are numbered from <b>1</b> to <b>N</b>.<br />
A distance between slots <b>i</b> and <b>j</b> is <b>|i - j|</b>. There are <b>M</b> pairs of servers that should be connected by wire. You are to place all the servers in the slots so the total wire length is minimized. </p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains two integer numbers <b>N</b> and <b>M</b>. Then <b>M</b> lines follow. Each of them contains two numbers <b>a</b> and <b>b</b>, which means that server <b>a</b> and server <b>b</b> should be connected to each other.
</p>
<h3>Output</h3>
<p>Output single integer — minimal wire length required to connect all the servers arranged in <b>N</b> slots.</p>
<h3>Constraints</h3>
<p><b>1 ≤ N ≤ 20</b> <br />
<b>0 ≤ M ≤ N * (N - 1) / 2 </b> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3 2
1 2
1 3
<b>Output:</b>
2
</pre><p> </p>
<h3>Explanation</h3>
<p>One of the optimal arrangements is <b>[2, 1, 3]</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-09-2014</td>
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
    </table><?php require("../../includes/footer.php"); ?>