<?php require("../../includes/header.php"); ?><h1>Room Corner</h1><div class="content">

<p>Rooms in Bytelandian houses are rather strange, they may or may not be exactly rectangular. But the walls of the room are aligned either vertically or horizontally to the town's XY axis. Additionally, each wall is integral in length. Thus the rooms are denoted by using the letters '-', '|', '+' and ' '. Let us denote a place occupied by one letter as <i>cell</i>. Here '-' specifies one unit of horizontal wall, '|' specifies one unit of vertical wall, and '+' means the wall turns in the center of the cell. For example, one of the valid rooms is the following:</p>
<pre><code><span style="font-family:'Courier New','Courier',monospace">   +-----+
   |     +-------+
+--+             |
|          +-----+
+-------+  |
        |  |
        +--+</span></code></pre><p>Also if you draw a horizontal segment whose the end points are in the room, then the whole of the segment is inside of the room. And there are other constraints for the rooms, please see Notes, Some samples of valid rooms for input, and Some samples of invalid rooms for input.</p>
<p>How weird, but it gives a chance to lot of children to play a game together. The game starts with all children standing on corners of the room. More precisely, children stand on the nearest empty cell which is inside of the room. Each child stands in one corner, and all corners must be occupied. We only consider corners which make a 90 degree angle inside the room. Those that make 270 degree angle inside room are not considered as a corner. In the below figure, 1, 3, 4 are valid corners but 2 is not. Thus all the cells denoted by * will have one child.</p>
<pre><code><span style="font-family:'Courier New','Courier',monospace">   1-----4
   |*   *+-------+
3--2            *|
|*         +-----+
+-------+  |
        |**|
        +--+</span></code></pre><p>Note that it is possible that the two corner has space for only one child, as shown below.</p>
<pre><code><span style="font-family:'Courier New','Courier',monospace">+---
|*
+---</span></code></pre><p>In the game, a child can swap positions with a child standing at an adjacent corner. Thus, in the below figure, child 'A' can swap place with either 'B' or 'D', and child 'D' can swap place with either 'A' or 'E'. Inside a room many swaps can be taking place simultaneously, but each swap is between 2 children only. Also while swapping positions, children should keep one hand touching the wall, which means they can move only along the walls.</p>
<pre><code><span style="font-family:'Courier New','Courier',monospace">   +-----+
   |A   B+-------+
+--+            C|
|D         +-----+
+-------+  |
        |EF|
        +--+</span></code></pre><p>Considering each child takes one second to walk to an adjacent empty cell, some pair of friends want to know the minimum time in which they can cross each other. Crossing happens when 2 children, both moving towards the corner of the other child (for swapping), meet briefly in the middle of swap. And a child can start to swap with other child only when both children stand at corners. For example, when child 'C' swaps with 'F', the swapping will be the following, and they cross with time = 4.5.<br />
<img src="http://i.imgur.com/9BTlBDl.png" alt="" /></p>
<h3>Input</h3>
<p>First line consists of an integer <b>N</b>. Then <b>N</b> lines follow to represent the room. Children are described as capital alphabets (A-Z), to specify the child standing next to a corner. There may be several children labelled with same alphabet. In row-major order, the first child with some alphabet <b>α</b> is referred to as <b>α1</b>, the second as <b>α2</b>, and the 123rd as <b>α123</b> and so on.</p>
<p>After <b>N</b> lines, there is a line which contains <b>T</b>, the number of queries. Then <b>T</b> lines follow each containing a pair of space separated labels (character and number) to denote the pair of friends.</p>
<h3>Output</h3>
<p>For each of <b>T</b> given pair of friends, you have to output the minimum time in which the given pair of friends can cross each other, assuming that the pair of friends play intelligently and each pair starts from the original positions. Output <b>T</b> real numbers (2 places after decimal), one on each line.</p>
<h3>Constraints</h3>
<p>5 ≤ <b>N</b> ≤ 2500<br/>3 ≤ length of each of <b>N</b> lines (to describe a room) ≤ 2500<br/>1 ≤ <b>T</b> ≤ 10000</br/></br/></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
<code><span style="font-family:'Courier New','Courier',monospace">7
   +-----+
   |A   B|
+--+     |
|C       |
|        |
|A      E|
+--------+</span></code>
2
A1 E1
C1 A2

<b>Output:</b>
6.00
1.00
</pre><h3>Notes</h3>
<ul>
<li>All the labels given in input are valid, that is, each label denotes one child in the room.
</li>
<li>All children are inside of the room.
</li>
<li>Children labelled by the same letter do not appear on the same horizontal line.
</li>
<li>The room must satisfy the condition: If you draw a horizontal segment whose the end points are in the room, then the whole of the segment is inside of the room.
</li>
<li>All empty cells, which are inside the room, are <a href="http://en.wikipedia.org/wiki/4-connected_neighborhood">4-connected</a>, where an empty cell means a cell denoted by a space ' ' or a capital alphabet (A-Z).
</li>
<li>For each of wall cells '-', '|' and '+', there is at least one empty cell, which is inside of the room, lying next (horizontally, vertically or diagonally) to each other.
</li>
<li>For each of corner cells, there is a cell having a child in the next (diagonally) to the corner cell.
</li>
<li>For each of cells having children, there is a corner cell in the next (diagonally) to the cell having a child.
</li>
<li>There is at least one line of <b>N</b> lines (to describe a room), whose first character is not a space ' '.
</li>
<li>The last character of each of <b>N</b> lines (to describe a room) does not be a space ' '.
</li>
</ul>
<h3>Some samples of valid rooms for input</h3>
<pre><code><span style="font-family:'Courier New','Courier',monospace">   +-----+
   |A   B+-------+
+--+            B|
|A         +-----+
+-------+  |
        |AB|
        +--+</span></code></pre><p>The room described in the above figure is valid.</p>
<pre><code><span style="font-family:'Courier New','Courier',monospace">+-------------+
|A           B|
| +-----------+
| |
| |
| +-----------+
|C           D|
+-------------+</span></code></pre><p>In the above figure, child 'B' can swap place with child 'D' directly.</p>
<pre><code><span style="font-family:'Courier New','Courier',monospace">+-+
|A++
| B++
|  C++
|D  E|
+----+</span></code></pre><p>The room described in the above figure is also valid.</p>
<h3>Some samples of invalid rooms for input</h3>
<pre><code><span style="font-family:'Courier New','Courier',monospace">   +-----+
   |A   B+-------+
+--+             |
|D         +-----+
+-------+  |
        |EF|
        +--+</span></code></pre><p>
In the above figure, there are corners without children.</p>
<pre><code><span style="font-family:'Courier New','Courier',monospace">   +-----+  +----+
   |A   B+--+C  D|
   |E           F|
   +-------------+</span></code></pre><p>In the above figure, the room must satisfy the condition: If you draw a horizontal segment whose the end points are in the room, then the whole of the segment is inside of the room. And all lines start with spaces ' ', which also violates the constraints. Furthermore it also violates the constraint 5 ≤ <b>N</b>.</p>
<pre><code><span style="font-family:'Courier New','Courier',monospace">+----+
|A  B|
+-++-+
E ||
+-++-+
|C  C|
+----+</span></code></pre><p>In the above figure, all empty cells, which are inside the room, must be 4-connected. See the below figure, here, the empty cells (inside of the room) are denoted by *, and they are not 4-connected. And children labelled by the same letter must not appear on the same horizontal line. And child 'E' is outside of the room.</p>
<pre><code><span style="font-family:'Courier New','Courier',monospace">+----+
|****|
+-++-+
  ||
+-++-+
|****|
+----+</span></code></pre><pre><code><span style="font-family:'Courier New','Courier',monospace">
+----+
|A  B|
|    ++
|C  D++
+----+</span></code></pre><p>In the above figure, the right 2 cells with '+' must have adjacent empty cells.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vinayak garg">vinayak garg</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-09-2012</td>
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