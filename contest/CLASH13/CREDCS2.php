<?php require("../../includes/header.php"); ?><h1>Lego Builder</h1><div class="content">
<p>Your younger brother just purchased a set of lego blocks. He built a house and now wishes to build a rectangular fence around it.
</p>
<p>
But he has only a few blocks left.  Width of each block is 1 unit. Help him build the fence on the periphery of the board. </p>
<p>
It is strictly desired that the fence has equal width at all the points equal to 1 unit.
</p>
<p><h3>Input</h3>
</p><p>
The first line contains the dimensions of the board <b>L</b> and <b>B</b> which has to be fenced.<br /><br />
A number of lines follow, where each line is<br />
in the form of <b>N S</b>,<br />  where <b>N</b> is the number of blocks and <b>S</b> is the corresponding Size (Length).<br /><br />
Input is terminated by 0.
</p>
<h3>Output</h3>
<p>Output "YES" or "NO" (without the quotes) depending on whether it is possible to construct the fence with the given configuration of the blocks or not.</p>
<h3>Constraints</h3>
<p>1 &lt;= <b>B</b> &lt;= <b>L</b> &lt;= 200<br /><br />
0 &lt;= <b>N</b>,<b>S</b> &lt;= 10^4<br /></p>
<h3>Example</h3>
<pre><b>Input:</b>
6 4
1 6
2 3
1 4
0

<b>Output:</b>
YES
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ashmew2">ashmew2</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-08-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, GO</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>