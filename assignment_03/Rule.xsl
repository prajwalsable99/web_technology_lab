<?xml version="1.0"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>


    <h1 align ="center">Employee Details</h1>
    <table border="2" align="center" bgcolor="#D5D6EE">

      <tr>
        <th>id</th>
        <th>name</th>
        <th>role</th>
        <th>salary</th>
      </tr>
      <xsl:for-each select="emp/e">
        <tr>
          <td><xsl:value-of select="id"/></td>
          <td><xsl:value-of select="name"/></td>
          <td><xsl:value-of select="role"/></td>
          <td><xsl:value-of select="salary"/></td>
        </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>