<?php require("../../includes/header.php"); ?><h1>Problem With Strings</h1><div class="content">

<p>Today, we will be unraveling the mysteries of one of the most twisted and curly beasts in all existence knots! The problem here is simple: given the picture of a string laid out curled on a table, you are to determine if it will curl up into a knot when the ends are pulled out.</p>
<pre>
...............  
...+------+....  
...|......|....  
...|...+--H----  
...|...|..|....  
---I---H--+....  
...|...|.......  
...+---+.......  
...............
</pre><p>The input will consist of a diagram of one single continuous string described in a two-dimensional grid of characters such as shown above. The &lsquo;&#8722;&rsquo; and &lsquo;|&rsquo; characters represent a horizontal and vertical segment of the string, respectively. &lsquo;+&rsquo; characters represent corners where the string turns at right angles on the table. &lsquo;I&rsquo; or &lsquo;H&rsquo; characters represent locations where parts of the strings cross:</p>
<ul>
<li>&lsquo;H&rsquo; represents locations where the horizontal string passes over the vertical string</li>
<li>&lsquo;I&rsquo; represents locations where the horizontal string passes under the vertical string</li>
</ul>

<p>The dot character, &lsquo;.&rsquo;, obviously, represents empty spaces of the table unoccupied by the string. Two horizontally adjacent non-empty spaces of the table are connected by the string iff neither of them are &lsquo;|&rsquo; characters. Similarly, vertically adjacent non-empty spaces are connected by the string iff neither of them are &lsquo;-&rsquo; characters. Inputs will be such that every &lsquo;+&rsquo; character will represent a proper corner where the string turns at a unambiguously at a right angle: formally, every &lsquo;+&rsquo; character will be connected to exactly one vertically adjacent and exactly one horizontally adjacent space. Moreover, to further simplify matters, you can assume that the only characters along the border of the given diagram, other than dots, will represent endpoints of the string. In short, the input will unambiguously specify a valid piece of string starting and ending at the border of the input diagram. Finally, assume that the string has negligible width and is made of a very smooth material, so that parts of the string can easily slide over each other with negligible friction.</p>
<h3>Input</h3>
<p> The input will consist of at most 80 test cases. Each test case will start with a single line containing two integers, r and c, indicating that the size of the diagram for that case is of r rows and c columns. This line will be followed by r more lines, each with exactly c characters, with characters in each line representing a row of the diagram. You may assume that 2 &#8804; r,c &#8804; 120.</p>
<h3>Output</h3>
<p>The output should consist of exactly one line for each test case in the format Case c: Response, where c is the test case serial number, starting from 1, and Response is either the string straightened or knotted (without the quotes) depending on whether the string will straighten out or coil up into a knot, respectively. See the sample for further clarifications.</p>
<h3>Sample input and output</h3>
<table>
<tr>
<td>stdin</td>
<td>stdout</td>
</tr>
<tr>
<td>9 15</td>
<td>Case 1: knotted</td>
</tr>
<tr>
<td>...............</td>
<td>Case 2: straightened</td>
</tr>
<tr>
<td>...+------+....</td>
<td></td>
</tr>
<tr>
<td>...|......|....</td>
<td></td>
</tr>
<tr>
<td>...|...+--H----</td>
<td></td>
</tr>
<tr>
<td>...|...|..|....</td>
<td></td>
</tr>
<tr>
<td>---I---H--+....</td>
<td></td>
</tr>
<tr>
<td>...|...|.......</td>
<td></td>
</tr>
<tr>
<td>...+---+.......</td>
<td></td>
</tr>
<tr>
<td>...............</td>
<td></td>
</tr>
<tr>
<td>9 15</td>
<td></td>
</tr>
<tr>
<td>...............</td>
<td></td>
</tr>
<tr>
<td>...+------+....</td>
<td></td>
</tr>
<tr>
<td>...|......|....</td>
<td></td>
</tr>
<tr>
<td>...|...+--I----</td>
<td></td>
</tr>
<tr>
<td>...|...|..|....</td>
<td></td>
</tr>
<tr>
<td>---I---H--+....</td>
<td></td>
</tr>
<tr>
<td>...|...|.......</td>
<td></td>
</tr>
<tr>
<td>...+---+.......</td>
<td></td>
</tr>
<tr>
<td>...............</td>
<td></td>
</tr>
</table>
    </div><table>
<tr>
<td>stdin</td>
<td>stdout</td>
</tr>
<tr>
<td>9 15</td>
<td>Case 1: knotted</td>
</tr>
<tr>
<td>...............</td>
<td>Case 2: straightened</td>
</tr>
<tr>
<td>...+------+....</td>
<td></td>
</tr>
<tr>
<td>...|......|....</td>
<td></td>
</tr>
<tr>
<td>...|...+--H----</td>
<td></td>
</tr>
<tr>
<td>...|...|..|....</td>
<td></td>
</tr>
<tr>
<td>---I---H--+....</td>
<td></td>
</tr>
<tr>
<td>...|...|.......</td>
<td></td>
</tr>
<tr>
<td>...+---+.......</td>
<td></td>
</tr>
<tr>
<td>...............</td>
<td></td>
</tr>
<tr>
<td>9 15</td>
<td></td>
</tr>
<tr>
<td>...............</td>
<td></td>
</tr>
<tr>
<td>...+------+....</td>
<td></td>
</tr>
<tr>
<td>...|......|....</td>
<td></td>
</tr>
<tr>
<td>...|...+--I----</td>
<td></td>
</tr>
<tr>
<td>...|...|..|....</td>
<td></td>
</tr>
<tr>
<td>---I---H--+....</td>
<td></td>
</tr>
<tr>
<td>...|...|.......</td>
<td></td>
</tr>
<tr>
<td>...+---+.......</td>
<td></td>
</tr>
<tr>
<td>...............</td>
<td></td>
</tr>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-10-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP11, FS, GO, JAVA, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>