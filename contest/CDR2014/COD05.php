<?php require("../../includes/header.php"); ?><h1>Nikhil and FlappyBirds</h1><div class="content">
<p>Nikhil loves to play FlappyBirds (who doesn't!). He plays it on his brother Nitin's mobile since he doesn't own one.<br />
One day, as usual, Nikhil comes to ask Nitin if he can play the game.<br />
Nitin challenges Nikhil to write code for a puzzle he's been trying to solve for last three days.<br />
If Nikhil solve's it, he can play.</p>
<p>But alas! Nikhil is not an expert programmer like you. He needs your help. Help Nikhil play FlappyBirds!</p>
<p>The puzzle is simple. You have a 4 x 4 grid. Some of the cells in the grid are black and some white.<br />
'b' represents black and 'a' represents white.</p>
<pre>Eg.
 
           babb
           bbbb
           aaaa
           aabb
</pre><p></p>
<p>The <b>task</b> is to change the color of at-most one cell to the other color (ie. a -&gt; b, b -&gt; a) so that you can form a 2 x 2 grid, with all cells of the same color.</p>
<h3>INPUT</h3>
<p> Input has four lines, containing four characters each. If the j-th character of the i-th line is 'b', that cell is black, and so on.</p>
<h3>OUTPUT</h3>
<p>Print "POSSIBLE" (without the quotes) if it's possible to complete the <b>task</b> and "NOT POSSIBLE" (without the quotes) otherwise.</p>
<h3> Sample Test:</h3>
<h5>Sample Test 1 Input</h5>
<p></p>
<pre>
 bbbb
 abaa
 bbbb
 aaaa
</pre><p></p>
<h5>Sample Test 1 Output</h5>
<p>POSSIBLE</p>
<h5>Sample Test 2 Input</h5>
<p></p>
<pre>
 bbbb
 aaaa
 bbbb
 aaaa
</pre><p></p>
<h5>Sample Test 2 Output</h5>
<p>NOT POSSIBLE</p>
<p> Explanation for Sample Test 1 : If we re-paint the 1st cell at 2nd row, we can get a 2 x 2 grid of all cells 'b'.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/arvchamp">arvchamp</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>