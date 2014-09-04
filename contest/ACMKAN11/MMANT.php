<?php require("../../includes/header.php"); ?><h1>Mr and Mrs Ant</h1><div class="content">

<p>Mr. and Mrs. Ant are very hungry. So, they want to collect food as much as they can. They can search for foods simultaneously. To do so, they start from their house and collect all foods together and meet in some place (not necessarily their house). Finally, they eat together.</p>
<p>The world of Mr. and Mrs. Ant is a two dimensional grid. Each cell is either the <b>home</b>, or <b>free</b>, or <b>blocked</b>, or contains a <b>food</b>. Two cells are adjacent if they share an edge. In each <b>second</b>, they can move from one cell to another cell simultaneously. One can decide to not to move in some step, while other may move. One cell can be visited many times. Both of them can move into the same cell also.</p>
<p>In this problem, the grid is given by an R x C matrix represented by following characters:
</p>
<style type="text/css">
#mmant-table td
{
   border: 1px solid #000;
   padding:3px;
}
</style><table id="mmant-table" cellspacing="" cellpadding="5" border="1">
<tr>
<th>Character</th>
<th>Meaning</th>
<th>Remarks</th>
</tr>
<tr>
<td>H</td>
<td>Home of Mr. and Mrs. Ant</td>
<td>Occurs exactly once</td>
</tr>
<tr>
<td>F</td>
<td>A food item</td>
<td>Occurs at least once, at most 8 times</td>
</tr>
<tr>
<td>. (dot)</td>
<td>Free (passable) cell</td>
<td>-</td>
</tr>
<tr>
<td># (hash)</td>
<td>Blocked Cell</td>
<td>-</td>
</tr>
</table>
<p><br/><br />
Given the grid information, give the minimum amount of time that must be needed for them to collect all the foods and then meet.</br/></p>
<h3>Input</h3>
<p>The first line of input will contain <b>T (T &lt;= 30)</b> denoting the number of cases. Each case starts with two integers <b>R</b> and <b>C (2 &lt;= R, C &lt;= 12)</b>. Then, <b>R</b> lines follow giving the grid.</p>
<h3>Output</h3>
<p>For each case, print the case number, the minimum amount of time (in <b>seconds</b>) that must be needed for them to collect all the foods and meet. If it is impossible to collect all the food items, output <b>-1</b> (negative one) instead.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2 3
H#.
.#F
2 6
F#F..#
..H#.F
<b>Output:</b>
Case 1: -1
Case 2: 8
</pre>    </div><table id="mmant-table" cellspacing="" cellpadding="5" border="1">
<tr>
<th>Character</th>
<th>Meaning</th>
<th>Remarks</th>
</tr>
<tr>
<td>H</td>
<td>Home of Mr. and Mrs. Ant</td>
<td>Occurs exactly once</td>
</tr>
<tr>
<td>F</td>
<td>A food item</td>
<td>Occurs at least once, at most 8 times</td>
</tr>
<tr>
<td>. (dot)</td>
<td>Free (passable) cell</td>
<td>-</td>
</tr>
<tr>
<td># (hash)</td>
<td>Blocked Cell</td>
<td>-</td>
</tr>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-10-2011</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>