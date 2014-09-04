<?php require("../../includes/header.php"); ?><h1>Grid Game</h1><div class="content">

<p> Alice and Bob is playing a game with stones.<br />
There is a NxN grid in each cell there may be a stone or may be empty cell.<br />
If a cell contain '.' (without single quotes) it means its an empty cell and if it contains 'S' (it means it has a stone).</p>
<p>Alice and Bob alternatively and optimally Play a game<br />
The game rules are as follows:</p>
<p>1) A player move some stones from the grid. He / She can remove stones are in connected cells (It means: if a cell at i, j has a stone and i+1,j and  i,j+1 and i-1,j and i,j-1 and so on in a connected manner and having a stone he / she can remove all  stones connected with this I, j cell).</p>
<p>2) Remove stones means He / She will make that cell empty it mean replace ‘S’ with ‘.’ </p>
<p>2) The player that have no stone to remove will lose the game.</p>
<p>3) They will play optimally It means Alice plays first than Bob, than Alice and so on.</p>
<p>4) They will try to remove more stones in a try it means a connected component of the grid that having more stones he / she will remove all stone from that connected set.</p>
<h3>Input</h3>
<p> First line contains T number of test cases.<br />
In each test case First line Contain N.<br />
Then NxN grid having  "." or "S"  (without quotes) .
 </p>
<h3>Output</h3>
<p> Print the name of Winner either Alice or Bob.
 </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
.S
SS
3
..S
S.S
..S
<b>Output:</b>
Alice
Bob      

</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> In the first example Alice remove stones from (0,1) cell and (1,0) that is connected with (0,1) diagonally, and also she will remove (1,1) cells stone because it is also connected with (0,1). So Bob has no stones to remove that why he will lose the game and Alice is the Winner.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/upendra1234">upendra1234</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>24-02-2013</td>
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