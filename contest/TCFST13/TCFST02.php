<?php require("../../includes/header.php"); ?><h1>Necklace</h1><div class="content">
<p> </p>
<p>Lets say one fine day, you decide to impress your Love, by gifting her a necklace of some of the most exquisite beads available in the world - each one different from the other. Lets say each bead is numbered from 1 to n. You are initially given the beads woven into the necklace in the order 1,2 ….n. That is the ith bead lies to the left of the (i-1)th bead.</p>
<p>Obviously, you are not as creative to choose the best possible relative positioning of the beads so as to make a limited edition collection. So you take the help of your friend who hands you a permutation scheme that would create a world class piece of jewellery. The permutation can be described by b1,b2…..bn which would mean that the b(i)th bead should lie on the left of the b(i-1)th bead.<br />
Now to reorder the beads, you need to choose which direction to move a particular bead (right or left) and how many positions should it be moved to reach its desired position. Let us define K as the sum total of distance moved by each bead in the process of reaching its destination. You need to minimise K. In the re-ordering process, all the beads are simultaneously isolated from the necklace.</p>
<p>Necklace cannot be flipped.</p>
<p> </p>
<h3>Input</h3>
<p>First line contains one integer n. <br />
The second line consists n integers b1, b2, b3, b4 .... bn from a permutation of set {1,2......n} describing the desired order of the beads.</p>
<p> </p>
<h3>Output</h3>
<p>Output should consists of only one integer k.</p>
<h3>Constraints</h3>
<p>1 ≤ n ≤ 50000</p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
4 2 3 1
<b>Output:</b>
2

<b>Input:</b>
4
4 1 2 3
<b>Output:</b>
0
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divyambansal">divyambansal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-10-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 3 sec</td>
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