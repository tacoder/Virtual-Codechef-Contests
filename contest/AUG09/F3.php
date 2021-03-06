<?php require("../../includes/header.php"); ?><h1>Curry Stained Napkin</h1><div class="content">

<p>The Chef has a huge square napkin of size 2<sup>n</sup> X 2<sup>n</sup>. He folds the napkin n-3 times. Each time he folds its bottom side over its top side, and then its right side over its left side. After each fold, the side length of the napkin is reduced by half. The Chef continues folding until there remains a 8x8 sheet, lying flat on a table.</p>
<p>Oh, did I forget to mention that the Chef was cooking a new brown colored curry while folding the napkin. He drops some brown colored gravy onto some cells in the folded 8x8 napkin. When he drops the gravy, it soaks through all the cells below it.</p>
<p>Now the Chef unfolds the napkin to its original size. There are now many curry stained brown colored cells in the napkin. They form several separate regions, each of which is connected. Could you help the Chef count how many regions of brown cells are there in the napkin?</p>
<p>Note that two cells are adjacent if they share a common edge (they are not considered adjacent if they only share a corner). Two cells are connected if we can go from one cell to the other via adjacent cells. A region is a maximal set of cells such that every two of its cells are connected.</p>
<p>Please see the example test case for more details.</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 50). Then t test cases follow. Each test case has the following form:</p>
<ul>
<li>The first line contains N (3 ≤ N ≤ 10<sup>9</sup>)</li>
<li>Then, 8 lines follow. Each line is a string of 8 characters, 0 or 1, where 1 denotes a stained brown cell in the folded napkin.</li>
</ul>
<h3>Output</h3>
<p>For each test case, print a single number that is the number of disconnected brown regions in the unfolded napkin. Since the result may be a very large number, you only need to print its remainder when dividing by 21945.</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
3
3
01000010
11000001
00000000
00011000
00011000
00010100
00001000
00000000
4
01000010
11000001
00000000
00011000
00011000
00010100
00001000
00000000
1000000000
11111111
11111111
11111111
11111111
11111111
11111111
11111111
11111111

<strong>Output:</strong>
6
22
1
</pre><h3>Output details</h3>
<p><img src="../../../content/paulmcvn:paper.png" alt="" /></p>
<p>Case 1 and 2: There are 6 brown regions in the 8x8 napkin. If we unfold it once, it has 22 brown regions: 11 regions in the top half and 11 regions in the bottom half (as shown in the figure above).</p>
<p>Case 3: All cells of the napkin are stained, so there is always one brown region, no matter how many times the Chef unfolds the napkin.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-07-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>