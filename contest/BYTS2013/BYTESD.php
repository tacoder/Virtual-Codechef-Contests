<?php require("../../includes/header.php"); ?><h1>Rescue Balin</h1><div class="content">

<p>Balin is stuck in a labyrinth beneath the lonely mountain and roof is about to collapse. Add a fire breathing dragon to the mix and it’s safe to say that he is desperate to get out of there as quickly as possible. Your task is to help him find the path to get out this pickle!</p>
<p>The labyrinth is represented as a m-by-n matrix with Balin’s position marked as ‘s’ and the exit marked as ‘f’. Cells are marked either as ‘b’ or ‘w’. The ‘w’ marked cells represent traps in the labyrinth, designed to kill and so Balin cannot choose those cells in his path to get out. The only safe positions are the ones that are marked with b’s. Your program must output the matrix containing ‘b’ in each cell on the required path and ‘-‘ <b>(ASCII Code 45)</b> in the other cells. In case there is no way for Balin to survive, output “The path doesn’t exist.”.</p>
<p>There is only one path to come out of the labyrinth but the labyrinth contains false paths which Balin must avoid because they will eventually lead to  a trap. </p>
<h3>Input</h3>
<p>The first line of the input will consist of an integer t representing the number of testcases.</p>
<p>Every testcase consists of the following lines:</p>
<p>The first line contains two integers n and m representing the number of rows and columns respectively.<br />
Next n lines contain m letters denoting the map of the labyrinth.</p>
<h3>Output</h3>
<p>For each testcase output an n X m matrix that has ‘s’, ‘f’ at the same positions as in the input matrix and a path represented by b’s which is path from s to f and for all other positions output a ‘–‘.</p>
<p>If no such path exists, output "The path doesn't exist." (quotes only for clarity).</p>
<p><b>NOTE: Balin cannot move diagonally</b></p>
<h3>Constraints</h3>

<p>1 &lt;= T &lt;=10</p>
<p>2 &lt;=n,  m&lt;=1000</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
<font face = "courier new">2
6 5
bbbbw
bwwfw
bbbww
bwwww
bbbbw
wwwbs

4 4
bbbw
wwfw
bwww
bbbs</font>


<b>Output:</b>
<p><font face = "courier new">bbbb-
b--f-
b----
b----
bbbb-
---bs
The path doesn't exist.</font></p>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/troika_bytes13">troika_bytes13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-02-2013</td>
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