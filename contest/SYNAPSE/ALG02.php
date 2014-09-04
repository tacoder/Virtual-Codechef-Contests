<?php require("../../includes/header.php"); ?><h1>Wiring</h1><div class="content">

<p>A Government of merryland is planning to power the city.<br />
The city is divided into AxB blocks, each block has either house(H), transformer(T) or empty land(E). The wiring to a block can be done only if the block is vertically or horizontally adjacent to a wired block. The wiring to an empty block is not done as there are no houses there. The cost of providing electricity to a particular block in the city is equivalent to the distance of block from nearest wired transformer. The distance is measured in either horizontal or vertical manner through already wired blocks. The wiring must ensure that all the blocks get the electricity, and also should ensure that the cost is minimum for wiring the city. Assume that the power enters the city from top left block and that block also has a transformer.<br />
Assume that it is possible to provide electricity to the whole city i.e. there is atleast one way to wire the whole merryland.</p>
<h3>Input</h3>
<p>1st line is number of test cases</p>
<p>1st line of each test cases gives values of A and B</p>
<p>1st line of each test case is followed by AxB matrix containing T(transformer), H(houses), E(empty region) (there are no spaces in between)</p>
<h3>Output</h3>
<p>Minimum cost that the government have to bear to power whole city.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
2 2
TH
TE

<b>Output:</b>
2 
<p> Expaination : 1 to connect T(top left corner) to H and other 1 to connect T to T)
</p></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/illume">illume</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-02-2011</td>
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