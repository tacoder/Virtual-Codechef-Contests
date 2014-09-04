<?php require("../../includes/header.php"); ?><h1>Baldy and Princess Saumia</h1><div class="content">
<p>Our friend Baldy was in love with Princess Saumia. They lived happily untill one day a strange disease grips the planet. Consider Earth to be built of unit square </p>
<p>cells infinitely in all the directions. Now the disease has a trigger region consisting of some cells. At any second a cell can have two states, either infected or healthy</p>
<p>At any second the current state of a cell is determined by the previous states of the four cells directly above, below, and to the side of the cell and the previous state of the current cell. i.e. A total of <b>5</b> cells. If the number of cells infected in the previous second were odd (out of these <b>5</b> cells ) then the current cell will be <b>infected</b>, else it will be <b>Healthy</b>. At every second the rule is applied simultanously to all cells.</p>
<p>Now Baldy has successfully invented an antidote to the widespread infection. However the formula will only work if he puts in a correct proportion of tetracycline drug in that. There should be exactly <b>one</b> unit of drug for each infected cell. So help baldy find the number of infected cells at the current second.
</p>
<p>The infected region initially will be described as a matrix of characters. a cell will have value <b>'i'</b> if it is <b>infected</b>, or <b>'.'</b>if the cell is <b>healthy</b>. You need to find how many cells will be infected at exactly <b>K<sup>th</sup></b>second. <br /><br /><br />
Read the sample I/O for more clarification.
</p>
<h3>Input</h3>
<p>
The first line will contain an integer <b>T</b>, denoting the number of test cases. for each test case:<br />
<br />The first line will contain two integers <b>N</b> and <b>M</b> which gives the dimensions of the trigger grid.<br /><br />
The next <b>N</b> lines contain a string each of <b>M</b> characters. A character is <b>'.'</b> if the cell is healthy or <b>'i'</b> if it is infected.<br />
The next line will contain an integer <b>K</b>.</p>
<h3>Output</h3>
<p>For each test case output the number of infected cells at the <b>K<sup>th</sup></b> second.<br />
You can assume the answer will fit in a 64 bit signed integer.<br />
You can also assume that the given state of infection is at <b>0<sup>th</sup></b> second.</p>
<h3>Constraints</h3>

<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>M*N</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10^9</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>

1
2 2
ii
i.
3


<b>Output:</b>

23

</pre><p> </p>
<h3>Explanation</h3>
<p><br />The state of grid at 3rd second will be:</p>
<p><br />...ii...<br />
<br />..ii.i..<br />
<br />.i.iiii.<br />
<br />iiiii..i<br />
<br />i.ii....<br />
<br />.ii.....<br />
<br />..i.....<br />
<br />...i....
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aichemzee">aichemzee</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-09-2013</td>
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