<?php require("../../includes/header.php"); ?><h1>Packing the Boxes</h1><div class="content">

<p><b>This problem was part of the <a href="http://www.codechef.com/APRIL09/">CodeChef April Challenge</a>.  All user submissions for this contest problem are publicly available <a href="http://www.codechef.com/APRIL09/status/A5/">here</a>.</b></p>
<p>Shaheen has bought some gifts for a friend, which are wrapped up in several boxes of different sizes (all of which are full). She will need to carry the gifts a long way to her friend's house, so she would prefer to add some extra packing, and accommodate everything in one extra box. Moreover, to avoid damaging the contents, she does not wish to place more than two boxes directly within any box; however, boxes can be placed within boxes which contain other boxes, etc. A box which is used for holding two boxes of sizes <i>a</i> and <i>b</i> will have size <i>a</i>+<i>b</i>, and will cost Shaheen <i>a</i>+<i>b</i> coins at the local store. Please help Shaheen determine the minimum cost required to achieve the complete packing, and the number of different possible packings (arrangements of boxes within each other) having such a minimal cost.</p>
<h3>Input</h3>
<p>The first line of input is <i>n</i> &lt;=2000, the number of boxes with Shaheen's gifts. The next <i>n</i> lines of input contain one positive integer each, not greater than 10<sup>6</sup>, representing the sizes of the successive boxes.
</p>
<h3>Output</h3>
<p>
Print to output exactly 2 numbers separated by spaces: the cost of the optimal solution, and the number of distinct ways of achieving this solution (modulo 10<sup>9</sup>).
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
3
2
3
5
1

<b>Output:</b>
31 3
</pre><p>
<br/><br />
<b>Explanation:</b><br />
The three solutions leading to cost 31 are as follows:</br/></p>
<p>
1) pack the 2nd and the 5th box together, pack the resulting box together with the 1st box, and pack the result together with an additional box used for packing the 3rd and 4th boxes,</p>
<p>
or</p>
<p>
2) pack the 2nd and the 5th box together, pack the resulting box together with the 3rd box, and pack the result together with an additional box used for packing the 1st and 4th boxes,</p>
<p>
or</p>
<p>
3) pack the 2nd and the 5th box together, pack the resulting box together with the 4th box, and pack the result together with an additional box used for packing the 1st and 3rd boxes.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-12-2008</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>