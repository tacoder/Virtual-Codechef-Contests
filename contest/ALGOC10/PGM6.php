<?php require("../../includes/header.php"); ?><h1>Alien Dictionary</h1><div class="content">

<p> Some alien civilization has a quite strange language. Each word has length<br />
wordLength and consists of only 'A' and 'B' characters. Some sequences of A's and<br />
B's are forbidden (by ancient tradition), and do not appear as a substring of any<br />
valid word. Any word that does not contain a forbidden substring is valid. The set of<br />
forbidden substrings is given in the String[] forbiddenSubstrings. Each element of<br />
forbiddenSubstrings contains 'A' or  'B' .</p>
<p>The alien dictionary contains all valid alien words in alphabetical order. Each page<br />
of the dictionary contains exactly one word. Pages are numbered starting from 0.<br />
Given a int[] wordNumbers, return a String[] containing the same number of<br />
elements as wordNumbers, where the i-th element is the word written on page<br />
wordNumbers[i] of the dictionary or "NO PAGE" (quotes for clarity) if there is no<br />
such page in the dictionary.</p>
<h3>Input</h3>
<p>The first line consists of the number of characters. This is followed by the list of forbidden substrings separated by space. The last line consists of the page numbers to be displayed. </p>
<h3>Output</h3>
<p>List of words in the specified pages as specified in the problem statement. NO PAGE if there is no page.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
AAA BAA ABB
4 12 0 6 9
<b>Output:</b>
{BBBAB,NO PAGE,AABAB,BBBBB,NO PAGE}
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/mariojuana">mariojuana</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-02-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP11, GO, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>