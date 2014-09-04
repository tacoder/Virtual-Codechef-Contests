<?php require("../../includes/header.php"); ?><h1>Best Actress Award</h1><div class="content">
<p> </p>
<p>There  was  tough  competition  between  <b>Amy  Adams</b> and  <b>Cate  Blanchett</b> for Best Actress Award in Oscars 2014. The Oscar Committee decided to choose the one who wins the below game.
</p>
<p>The game rules are described as follows:</p>
<p><b>1)</b>Amy will play first.</p>
<p><b>2)</b>Each actress can remove 1,<b>K</b> or <b>L</b> characters from the beginning of a given string during each move.</p>
<p><b>3)</b>The actress who obtains lexicographically Mth smallest string after doing operation <b>(2)</b> will be declared as winner.</p>
<p>If given string is already Mth smallest string,then second actress wins as first actress cannot perform operation <b>2)</b>.</p>
<p>Given  the  values  of <b>K</b> ,<b>L</b>  and  <b>M</b> and a string <b>S</b>,your task is to tell who wins the game. As both the actresses are intelligent and are eager to win the award, they play the game optimally.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.<br />
The description of <b>T</b> test cases follows in <b>3T</b> lines.</p>
<p>The first line of each test case contains the integers <b>K</b> and <b>L</b>.</p>
<p>The second line contains a string <b>S</b> consisting of only lowercase<b> [a-z]</b> alphabets.</p>
<p>The third line contains the rank <b>M</b>.
</p>
<h3>Output</h3>
<p>For each test case, output a single line containing <b>A</b> if Amy wins else print <b>B</b> if Blanchett wins.
</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> &lt; <b>K</b> &lt; <b>L</b> &lt; <b>10</b></li>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>|S|</b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
1
2 3 
abcdefg
5

<b>Output:</b>
B
</pre><p> </p>
<h3>Explanation</h3>
<p>5th smallest string obtained by removing letters from beginning is <b>efg</b>.<br />
If Amy removes 1,2 or 3 letters from beginning Blanchett can remove 3,2 or 1 letters in turn in order to obtain efg.Thus Blanchett  wins.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/purvi2">purvi2</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-03-2014</td>
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